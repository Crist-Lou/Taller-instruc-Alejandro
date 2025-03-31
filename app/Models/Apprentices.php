<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    protected $table = 'apprentices';

    public function CA (){
        return $this -> belongsTo('app\Models\computers');
    }
    public function AC (){
        return $this -> belongsTo('app\Models\Course');
    }
}
