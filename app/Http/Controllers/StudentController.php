<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;
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
  
  public function create()
  {
    return view('student/create');
  }
  
  public function store(Request $request)
  {
    $student=new Student;
    $student->name=$request->input('name');
    $student->tel=$request->input('tel');
    $student->email=$request->input('email');
    $student->save();
    //一覧表示画面にリダイレクト
    return redirect('student/list');
  }
  
  public function show($id)
  {
    $student=Student::find($id);
    return view('student/show', compact('student'));
  }
  
  public function getedit($id)
  {
    $student=Student::find($id);
    return view('student/edit', compact('student'));
  }
  
  public function update(Request $request, $id)
  {
    $student=Student::find($id);
    $student->name=$request->input('name');
    $student->email=$request->input('email');
    $student->tel=$request->input('tel');
    //DBに保存
    $student->save();
    //処理が終わったらstudent/listにリダイレクト
    return redirect('/student/list');
  }
  
  public function destroy($id)
  {
    $student=Student::find($id);
    $student->delete();
    return redirect('student/list');
  }

}
