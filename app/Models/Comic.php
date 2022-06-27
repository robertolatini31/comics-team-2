<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
/* use App\Models\Category; */
class Comic extends Model
{
    //
    protected $fillable = ['title','content','slug','cover_image','serie_id','user_id'];

    public static function generateSlug($title)
    {
        # code...
        return Str::slug($title, '-');
    }

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function serie(): BelongsTo
    {
        return $this->belongsTo(Serie::class);
    }


    /**
     * The tags that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function artist(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }

}

