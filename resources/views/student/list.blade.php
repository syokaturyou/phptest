@extends('layouts.master_bootstrap')
@section('title', '受講生一覧')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>受講生</h1>
<div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
  <h1><small>受講生一覧</small></h1>
</div>
<table class="table table-striped table-hover">
  <a href="{{ route('student.create') }}" class="btn btn-success btn-sm">新規作成</a>
  <thead>
    <tr>
      <th>No</th>
      <th>name</th>
      <th>email</th>
      <th>tel</th>
      <th>opration</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
      <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->tel}}</td>
        <td>
          <a href="{{route('student.show',['id'=>$student->id])}}" class="btn btn-primary btn-sm">詳細</a>
          <a href="{{ url('student/edit/'.$student->id.'') }}" class="btn btn-primary btn-sm">編集</a>
          <a>
            <form method="POST" action="{{route('student.destroy',['id'=>$student->id])}}">
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">削除</button>
            </form>
          </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<!-- page control -->
@endsection
