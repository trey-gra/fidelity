<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ins_company extends Model
{
    //
    protected $table = 'ins_comps';
    protected $fillable = ['name'];

    public function branch(){
    	return $this->hasMany('App\ins_branch_company', 'ins_co_id');
    }
}
