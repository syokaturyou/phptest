@extends('layouts.master_bootstrap')
@section('title', '受講生編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>新規作成画面</h1>
<p><a href="{{ route('book.index')}}">一覧画面</a></p>
 
 @if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
 

<form action="{{ url('book') }}" method="post">
    @csrf
    @method('POST') 
    <p>タイトル：<input type="text" name="title" value="{{old('title')}}"></p>
    <p>著者：<input type="text" name="author" value="{{old('author')}}"></p>
    <input type="submit" value="登録する">
</form>
@endsection