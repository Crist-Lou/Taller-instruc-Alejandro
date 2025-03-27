<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index() { return DB::table('teachers')->get(); }
    public function store(Request $request) { return DB::table('teachers')->insert($request->all()); }
}
