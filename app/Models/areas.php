<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $table = 'areas';

    public function AC(){
        return $this-> hasMany('app\Models\Course');
    }
    public function AT(){
        return $this-> hasMany('app\Models\teacher');
    }
}
