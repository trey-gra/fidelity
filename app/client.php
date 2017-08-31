<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    //
    protected $fillable =['id','fname', 'lname', 'dob', 'trn', 'occ_id', 'tel_d', 'tel_l', 'address1', 'parish_id'];

    public function claim(){
    	return $this->hasMany('\App\claim','client_id');
    }

    public function parish(){
    	return $this->belongsTo('\App\parish');
    }

    public function occu(){
    	return $this->belongsTo('\App\occupation','occ_id');
    }
}
