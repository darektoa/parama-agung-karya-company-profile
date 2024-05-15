<?php

namespace App\Models\Certificate;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\HasMany;

class Certificate extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $guarded = [
        'id'
    ];

    /**
     * Get the images of the certificate
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images() :HasMany
    {
        return $this->hasMany(Image::class);
    }
}
