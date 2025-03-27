<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComputersController extends Controller
{
    public function index() { return DB::table('computers')->get(); }
    public function store(Request $request) { return DB::table('computers')->insert($request->all()); }
}
