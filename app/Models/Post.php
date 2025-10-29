<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    // allow mass assignment for user_id (and other fields)
    protected $fillable = [
        'title',
        'body',
        'user_id',
        // ...other fillable fields...
    ];

    protected $withCount = ['comments', 'likes'];

    // public function getSnippetAttribute()
    // {
    //     return explode("\n\n", $this->body)[0];
    // }

    public function snippet(): Attribute
    {
        return Attribute::get(function (){
            return explode("\n\n", $this->body)[0];
        });
    }

    public function displayImage(): Attribute
    {
        return Attribute::get(function () {
            if (! $this->image || parse_url($this->image, PHP_URL_SCHEME)) {
                return $this->image;
            }

            return Storage::disk('public')->url($this->image);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Post comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }


    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::deleted(function (Post $post) {
            if($post->image){
                Storage::disk('public')->delete($post->image);
            }
        });
    }
}
