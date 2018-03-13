<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function create($id) {
        return view('photos.create')->with('album_id', $id);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'image|max:1999'
        ]);

        $full_filename = $request->file('photo')->getClientOriginalName();

        $filename = pathinfo($full_filename, PATHINFO_FILENAME);

        $file_extension = $request->file('photo')->getClientOriginalExtension();

        $new_filename = $filename . '_' . time() . '.' . $file_extension;

        $path = $request->file('photo')->storeAs("public/photos/{$request
        ->input('album_id')}", $new_filename);

        // Create Photo
        $photo = new Photo;
        $photo->album_id = $request->input('album_id') ;
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $new_filename;
        $photo->save();

        return redirect('albums')->with('success', 'Photo Uploaded');
    }

    public function show($id) {
        $photo = Photo::find($id);
        return view('photos.show', ['photo' => $photo]);
    }

    public function destroy($id) {
        $photo = Photo::find($id);

        if (Storage::delete("public/photos/{$photo->album_id}/{$photo->photo}")) {
            $photo->delete();
        }

        return redirect('/')->with('success', 'Photo deleted');

    }
}
