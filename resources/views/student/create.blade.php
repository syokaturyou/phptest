@extends('layouts.master_bootstrap')
@section('title', 'ユーザー編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>新規作成</h1>
<form method="POST" action="{{route('student.store')}}">
  @csrf
  <div class="form-group">
    <label for="name">{{ __('name') }}</label>
    <input id="name" type="text" class="form-control" name="name">
  </div>

  <div>
    <label for="form-tel">電話番号</label>
    <input type="tel" name="telephone" id="form-tel">
  </div>

  <div>
    <label for="form-email">メールアドレス</label>
    <input type="email" name="email" id="form-email">
  </div>

  <button type="submit">登録</button>
</form>
<a href="{{ route('student.index') }}">{{ __('一覧へ戻る') }}</a>
@endsection