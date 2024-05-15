<?php

namespace App\Models\Certificate;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'certificate_images';

    protected $guarded = [
        'id'
    ];

    /**
     * Get the certificate of the image
     * 
     * @return \Illuminate\Database\Eloquent\BelongsTo;
     */
    public function certificate() :BelongsTo
    {
        return $this->belongsTo(Certificate::class, 'certificate_id', 'id');
    }
}
