<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class claim extends Model
{
    //
    public function client(){
    	return $this->belongsTo('\App\client');
    }

    public function neg_party(){
    	return $this->belongsTo('\App\client', 'negPtyId');
    }

    public function parish(){
    	return $this->belongsTo('\App\parish');
    }

    public function insurance(){
        return $this->belongsTo('\App\ins_company', 'cInsCoId');
    }
}
