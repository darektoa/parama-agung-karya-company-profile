<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\{HasOne};

class Blog extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'blogs';

    protected $guarded = [
        'id'
    ];

    
    /**
     * Get thumbnail of the content 
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function thumbnail() :HasOne
    {
        return $this->hasOne(Thumbnail::class, 'blog_id');
    }
}
