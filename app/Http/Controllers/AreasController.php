<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreasController extends Controller
{
    public function index() { return DB::table('areas')->get(); }
    public function store(Request $request) { return DB::table('areas')->insert($request->all()); }
}
