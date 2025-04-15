<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    protected $table = 'computers';
    public function AC (){
        return $this -> hasOne('app\Models\Apprentices');
    }
}
