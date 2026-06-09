<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $fillable = ['name', 'path', 'album_id'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}