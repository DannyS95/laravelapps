<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index() {
        $albums = Album::with('photos')->get();
        return view('albums.index', ['albums' => $albums]);
    }

    public function create() {
        return view('albums.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'cover_image' => 'image|max:1999'
        ]);

        $full_filename = $request->file('cover_image')->getClientOriginalName();

        $filename = pathinfo($full_filename, PATHINFO_FILENAME);

        $file_extension = $request->file('cover_image')->getClientOriginalExtension();

        $new_filename = $filename . '_' . time() . '.' . $file_extension;

        $path = $request->file('cover_image')->storeAs('public/album_covers', $new_filename);

        // Create Album
        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $new_filename;
        $album->save();

        return redirect('/albums')->with('success', 'Album Created');
    }

    public function show($id) {
        $album = Album::with('Photos')->find($id);
        return view('albums.show')->with('album', $album);
    }
}
