<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body']; //field yang di izin kan untuk di isi
    protected $guarded = ['id']; //field yang tidak diizinkan untuk di isi
    protected $with = ['author', 'category'];

    //menggunakan queryScope Laravel localScope
    public function scopeFilter($query, array $filters)
    {
        //seharusnya checking request di controller
        // if (request('search')) { 
        //     $query->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        //setelah request checking di controller
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        //jika ada search maka lakukan ini
        //menggunakan notasi when dari collection laravel (untuk search all post)
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%') // $query dari depan, dan $search dari $filters['search']
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        //dan jika ada filter kategori, query data post ditambahkan category dengan slug berikut
        //menggunakan notasi when dari collection laravel (untuk search post lebih kompleks (by category))
        $query->when(isset($filters['category']) ? $filters['category'] : false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category)/* untuk menggunakan $category yg scope function */ {
                $query->where('slug', $category);
            });
        });

        //dan jika ada filter author, query data post ditambahkan author dengan username berikut
        //menggunakan notasi when dari collection laravel (untuk search post lebih kompleks (by category))
        $query->when(isset($filters['author']) ? $filters['author'] : false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author)/* untuk menggunakan $author yg scope function */ {
                $query->where('username', $author);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
