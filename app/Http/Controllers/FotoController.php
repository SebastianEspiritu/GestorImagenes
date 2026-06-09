<?php
namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Foto;

class FotoController extends Controller
{
    public function index($albumId)
    {
        $album = Album::findOrFail($albumId);
        $photos = Foto::where('album_id', $albumId)->get();
        return view('album.fotos', compact('photos', 'album'));
    }
}