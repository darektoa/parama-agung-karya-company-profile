<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'services';

    protected $guarded = [
        'id'
    ];

    
    /**
     * Get thumbnail of the service 
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function thumbnail() :HasOne
    {
        return $this->hasOne(Thumbnail::class, 'service_id');
    }
}
