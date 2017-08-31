<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ins_branch_company extends Model
{
    //
    protected $table = 'ins_branches';

    protected $fillable = ['ins_co_id', 'name', 'address','tel_1', 'tel_2'];

}
