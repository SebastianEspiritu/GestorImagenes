<?php
namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index()
    {
        $currentUser = Auth::user();
        $albums = Album::where('user_id', $currentUser->id)->get();
        return view('album.mostrar', compact('albums'));
    }
}