<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thumbnail extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'service_thumbnails';

    protected $guarded = [
        'id',
    ];


    /**
     * Get service of the thumbnail
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service() :BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
