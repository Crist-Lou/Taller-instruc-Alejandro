<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprenticesController extends Controller
{
    public function index() { return DB::table('apprentices')->get(); }
    public function store(Request $request) { return DB::table('apprentices')->insert($request->all()); }
}
