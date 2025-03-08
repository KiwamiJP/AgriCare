
public function store(Request $request)
{
    $validatedData = $request->validate([
        'comment' => 'required|string',
        'question_id' => 'required|exists:questions,id',
        'photo.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $photos = [];
    if ($request->hasFile('photo')) {
        foreach ($request->file('photo') as $photo) {
            $filename = time() . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public/comments', $filename);
            $photos[] = $filename;
        }
    }

    Comment::create([
        'comment' => $validatedData['comment'],
        'question_id' => $validatedData['question_id'],
        'user_id' => auth()->id(),
        'photo' => !empty($photos) ? json_encode($photos) : null
    ]);

    return back()->with('success', 'Comment added successfully');
}