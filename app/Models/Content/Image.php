<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'content_images';

    protected $guarded = [
        'id'
    ];

    
    /**
     * Get content of the image
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content() :BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
}
