<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body']; //field yang di izin kan untuk di isi
    protected $guarded = ['id']; //field yang tidak diizinkan untuk di isi
}
