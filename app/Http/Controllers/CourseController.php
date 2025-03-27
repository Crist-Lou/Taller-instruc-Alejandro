<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index() { return DB::table('courses')->get(); }
    public function store(Request $request) { return DB::table('courses')->insert($request->all()); }
}
