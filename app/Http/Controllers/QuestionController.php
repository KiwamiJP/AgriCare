public function index(Request $request)
{
    $questions = Question::with(['user', 'categories'])
        ->when($request->category, function($query) use ($request) {
            return $query->whereHas('categories', function($q) use ($request) {
                $q->whereIn('categories.id', (array)$request->category);
            });
        })
        ->latest()
        ->get();

    $categories = Category::withCount('questions')
        ->where('parent_id', 59)
        ->get();

    return view('questions-and-answers', compact('questions', 'categories'));
}
```
```php
public function store(Request $request)
{
    $request->validate([
        'question' => 'required',
        'category_id' => 'required|array',
        'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $photoNames = [];
    if ($request->hasFile('photos')) {
        foreach ($request->file('photos') as $photo) {
            $filename = time() . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public/questions', $filename);
            $photoNames[] = $filename;
        }
    }

    $question = new Question();
    $question->question = $request->question;
    $question->user_id = auth()->id();
    $question->photos = !empty($photoNames) ? $photoNames : null;
    $question->save();

    $question->categories()->attach($request->category_id);

    return redirect()->back()->with('success', 'Question posted successfully!');
}