<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Apprentices;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Computers;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class OrmController extends Controller
{
    public function consultas (){

    $apprentices = Apprentices::find(1);
    return $apprentices -> Computers;
     
    $course = Course::find(2);
    return $course -> Areas;

    $teacher = Teacher::find(1);
    return $course -> Training_centers;
    }
}
