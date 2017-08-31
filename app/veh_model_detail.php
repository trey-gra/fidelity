<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class veh_model_detail extends Model
{
    //
    protected $table = 'veh_models';
    protected $fillable = ['make_id', 'model'];
}
