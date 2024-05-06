<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thumbnail extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'portfolio_thumbnails';

    protected $guarded = [
        'id'
    ];


    /**
     * Get portfolio of the thumbnail
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portfolio() :BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }
}
