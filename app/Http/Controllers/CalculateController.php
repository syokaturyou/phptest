<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
  public function getCalc(Request $request){return view('calculate.num');}
}
