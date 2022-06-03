<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
  public function getlist()
  {
  // $query = \App\Student::query();
  // 全件取得 +ページネーション
  // $students = DB::table('students')->simplePaginate(15);
  $students = Student::all();
  return view('student.list')->with('students',$students);
  }
}
