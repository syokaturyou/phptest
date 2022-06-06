@extends('layouts.master_bootstrap')
@section('title', 'ユーザー一覧')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<div class="container">
  <h1>{{ $title }}</h1>
  <form action="{{ url('user') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="title">{{ __('Name') }}</label>
      <input id="title" type="text" class="form-control" name="title" required autofocus>
    </div>
    <div class="form-group">
      <label for="body">{{ __('Email') }}</label>
      <textarea id="body" class="form-control" name="body" rows="8" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
  </form>
</div>
@endsection
