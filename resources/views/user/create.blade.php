@extends('layouts.master_bootstrap')
@section('title', 'ユーザー一覧')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<div class="container">
  <h1>ユーザー新規作成</h1>
  <form method="POST" action="{{route('user.store')}}">
    @csrf
    <div class="form-group">
      <label for="title">{{ __('Name') }}</label>
      <input id="title" type="text" class="form-control" name="title" required autofocus>
    </div>
    <div class="form-group">
      <label for="title">{{ __('Email') }}</label>
      <input id="title" class="form-control" name="title" rows="8" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
  </form>
</div>
@endsection
