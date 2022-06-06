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
    <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">
      {{ __('Edit') }}
    </a>
  </div>
  <dt class="col-md-2">{{ __('Created') }}:</dt>
  <dd class="col-md-10">
    <time itemprop="dateCreated" datetime="{{ $user->created_at }}">
      {{ $user->created_at }}
    </time>
  </dd>
  <dt class="col-md-2">{{ __('Updated') }}:</dt>
  <dd class="col-md-10">
    <time itemprop="dateModified" datetime="{{ $user->updated_at }}">
      {{ $user->updated_at }}
    </time>
  </dd>
@endsection
