@extends('layouts.master_bootstrap')
@section('title', 'ユーザー一覧')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<div class="container">
  <h1>ユーザー新規作成</h1>
  <form action='{{ route('user.store') }}' method='post'>
    @csrf
      名前：<input type='text' name='name'><br>
      email：<input type='text' name='email'><br>
      パスワード：<input type='text' name='password'><br>
      <input type='submit' value='投稿' class="btn btn-primary">
  </form>
</div>
@endsection
