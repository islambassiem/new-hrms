<?php

namespace App\Models;

use App\Traits\TrackUser;
use Illuminate\Database\Eloquent\Model;

class IdentityType extends Model
{
    //
    use TrackUser;

    const NationalID = 1;

    const GulfID = 2;

    const Iqama = 3;

    const Passport = 4;

    const BorderNumber = 5;
}
