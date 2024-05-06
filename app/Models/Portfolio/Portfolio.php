<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Portfolio extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'portfolios';

    protected $guarded = [
        'id'
    ];

    
    /**
     * Get thumbnail of the portfolio 
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function thumbnail() :HasOne
    {
        return $this->hasOne(Thumbnail::class, 'portfolio_id');
    }
}
