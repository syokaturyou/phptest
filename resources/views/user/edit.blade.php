@extends('layouts.master_bootstrap')
@section('title', 'ユーザー編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>ユーザー編集</h1>
<div class="container">
  <form method="GET" action="{{route('user.update',['id' =>$user->id])}}">
    @csrf
    <div class="form-group">
      <label for="name">{{ __('Name') }}</label>
      <input id="name" type="text" class="form-control"  name="name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
      <label for="email">{{ __('Email') }}</label>
      <textarea id="email" class="form-control" name="email">{{ $user->email }}</textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
  </form>
  <a href="{{route('user.show',['id'=>$user->id])}}">{{ __('詳細に戻る') }}</a>
</div>
@endsection
