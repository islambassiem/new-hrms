<?php

namespace App\Models;

use App\Traits\TrackUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    /** @use HasFactory<\Database\Factories\IdentityFactory> */
    use HasFactory;

    use TrackUser;
}
