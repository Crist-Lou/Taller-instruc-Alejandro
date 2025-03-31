<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function CA(){
        return $this -> hasMany('app/Models/Apprentices');
    }
    public function CT(){
        return $this -> belongsTo('app\Models\Training_centers');
    }
    public function CAr(){
        return $this -> belongsTo('app\Models\areas');
    }
    public function Ctea(){
        return $this -> belongsToMany('app\Models\teacher');
    }
}
