<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gambar(){
        return $this->morphMany(Gambar::class, 'gambars');
    }
}
