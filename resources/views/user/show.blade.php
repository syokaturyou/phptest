@extends('layouts.master_bootstrap')
@section('title', 'ユーザー一覧')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
  <h1>ユーザー個人</h1>
　{{$user->id}}
　{{$user->name}}
　{{$user->email}}
　{{$user->password}}
　<div>
    <a href="{{ route('users') }}" class="btn btn-primary btn-sm">{{ __('一覧に戻る') }}</a>
    <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-success btn-sm">{{ __('編集') }}</a>
  </div>
@endsection
