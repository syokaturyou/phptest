@extends('layouts.master_bootstrap')
@section('title', 'ユーザー編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>新規作成</h1>

<form class="mb-6" action="{{ route('student.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">名前</label>
    <input type="text" name="name" id="name">
  </div>

  <div class="form-group">
    <label for="form-tel">電話番号</label>
    <input type="text" name="tel" id="tel">
  </div>

  <div>
    <label for="form-email">メールアドレス</label>
    <input type="email" name="email" id="email">
  </div>

  <button type="submit">登録</button>
</form>
<a href="{{ route('student.index') }}">{{ __('一覧へ戻る') }}</a>
@endsection