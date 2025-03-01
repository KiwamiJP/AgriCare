if ($request->hasFile('photos')) {
    foreach ($request->file('photos') as $photo) {
        $filename = time() . '_' . $photo->getClientOriginalName();
        $photo->storeAs('public/questions', $filename);
        $photos[] = $filename;
    }
}