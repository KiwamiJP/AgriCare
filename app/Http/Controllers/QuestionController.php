public function index(Request $request)
{
    $query = Question::with(['user', 'categories', 'comments.user']);

    if ($request->has('category')) {
        $selectedCategories = (array) $request->category;
        $query->whereHas('categories', function ($q) use ($selectedCategories) {
            $q->whereIn('id', $selectedCategories);
        }, '=', count($selectedCategories));
    }

    $questions = $query->latest()->get();

    $categories = Category::withCount(['questions' => function ($query) {
            $query->whereHas('categories', function ($q) {
                $q->where('parent_id', 59);
            });
        }])
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

    // Use question_category table
    $question->categories()->attach($request->category_id);

    return redirect()->back()->with('success', 'Question posted successfully!');
}