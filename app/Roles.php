<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illluminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class role extends EloquentModel
{


    proctected $table ='roles';


    proctected $fillable = [
        'name'
    ];
}
