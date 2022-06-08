<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
  public function index()
  {
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
    $student->name = $request->input('name');
    $student->tel = $request->input('tel');
    $student->email = $request->input('email');
    $student->save();
    return redirect()->route('student.index');
  }
  
  public function show($id)
  {
    $student=Student::find($id);
    return view('student/show', compact('student'));
  }
  
  public function edit($id)
  {
    $student=Student::find($id);
    return view('student/edit', compact('student'));
  // 
  }
  
  public function update(Request $request, $id)
  {
    $student=Student::find($id);
    $student->name = $request->input('name');
    $student->email=$request->input('email');
    $student->tel = $request->input('tel');
    $student->save();
    return redirect('/student/index');
  }
  
  public function destroy(Request $request, $id)
  {
    $student=Student::find($id);
    $student->delete();
    return redirect('student/index');
  }

}
