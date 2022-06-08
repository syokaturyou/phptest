@extends('layouts.master_bootstrap')
@section('title', '受講生編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>編集画面</h1>
<p><a href="{{ route('book.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('book.update') }}" method="GET">
    @csrf
    <p>タイトル：<input type="text" name="title" value="{{ $book->title }}"></p>
    <p>著者：<input type="text" name="author" value="{{ $book->author }}"></p>
    <input type="submit" value="編集する">
</form>
@endsection
