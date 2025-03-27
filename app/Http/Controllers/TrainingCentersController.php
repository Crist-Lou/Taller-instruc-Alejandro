<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingCentersController extends Controller
{
    public function index() { return DB::table('training_centers')->get(); }
    public function store(Request $request) { return DB::table('training_centers')->insert($request->all()); }
}
