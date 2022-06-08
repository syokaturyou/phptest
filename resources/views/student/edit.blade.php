@extends('layouts.master_bootstrap')
@section('title', '受講生編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>受講生編集</h1>
<div class="container">
  <form method="GET" action="{{route('student.update',['id' =>$student->id])}}">
    @csrf
     <div class="form-group">
      <label for="name">{{ __('Name') }}</label>
      <input type="text" name="name" id="name" value="{{ $student->name }}">
    </div>
    <div>
      メールアドレス<input type="email" id="email" name="email" value="{{$student->email}}">
    </div>
    <div>
      電話番号<input type="text" id="tel" name="tel" value="{{$student->tel}}">
    </div>
    <input type="submit" value="更新する" class="btn btn-primary">
  </form>
  <a href="{{route('student.show',['id'=>$student->id])}}">{{ __('詳細に戻る') }}</a>
</div>
@endsection
