<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'body',
        'image',
        'user_id',
        'category_id',
        'price',
        'is_accepted',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function toSearchableArray(){
        return [
            'id' => $this->id,
            'title' => $this->title,
            // 'body' => $this->body,
            'category' => $this->category,
        ];
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
