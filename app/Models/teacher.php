<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $table = 'teachers';

    public function TA(){
        return $this-> belongsTo('app\Models\areas');
    }
    public function TTc(){
        return $this-> belongsTo('app\Models\Training_centers');
    }
    public function TCo(){
        return $this -> belongsToMany('app\Models\Course');
    }
}
