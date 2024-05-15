<?php

namespace App\Models\Banner;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Banner extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $guarded = [
        'id'
    ];
}
