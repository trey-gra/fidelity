<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    //
    protected $table = 'messages';

    
    protected $fillable = ['name', 'tele', 'email', 'detail'];
}
