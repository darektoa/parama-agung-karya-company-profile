<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\{BelongsTo};

class Thumbnail extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'blog_thumbnails';

    protected $guarded = [
        'id'
    ];


    /**
     * Get blog of the image
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blog() :BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }
}
