<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
  public function index()
  {
  // $query = \App\Student::query();
  // 全件取得 +ページネーション
  // $students = DB::table('students')->simplePaginate(15);
  $students = Student::all();
  return view('student.index')->with('students',$students);
  }
  
  public function create()
  {
    return view('student/create');
  }
  
  public function store(Request $request)
  {
    $student=new Student;
    $student->name = 'Some name';
    $student->tel = $request->input('tel');
    $student->email = $request->input('email');
    // $student->email = 'Some22 email';
    // $student->tel = 'Some tel';
    //DBに保存
    $student->save();
    // //一覧表示画面にリダイレクト
    return redirect('student/index');
    // return view('student.index')->with([
    //         // 'name' => $name,
    //         // 'tel' => $tel,
    //         'email' => $email
    // ]);
  }
  
  public function show($id)
  {
    $student=Student::find($id);
    return view('student/show', compact('student'));
    // return view('student.show', ['student' => $student]);
  }
  
  public function edit($id)
  {
    $student=Student::find($id);
    return view('student/edit', compact('student'));
    // return view('student.edit', ['student' => $student]);
  // 
  }
  
  public function update(Request $request, $id)
  {
    $student=Student::find($id);
    // $student->name=$request->input('name');
    // $student->email=$request->input('email');
    // $student->tel=$request->input('tel');
    $student->name = 'Some name';
    $student->email = 'Some email';
    $student->tel = 'Some tel';
    //DBに保存
    $student->save();
    //処理が終わったらstudent/listにリダイレクト
    return redirect('/student/index');
  }
  
  public function destroy(Request $request, $id)
  {
    $student=Student::find($id);
    $student->delete();
    return redirect('student/index');
  }

}
