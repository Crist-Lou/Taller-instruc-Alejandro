<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training_centers extends Model
{
    protected $table = 'training_centers';

    public function TC (){
        return $this -> hasMany('app\Models\Course');
    }
    public function TcT (){
        return $this -> hasMany('app\Models\teacher');
    }
}
