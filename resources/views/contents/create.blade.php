@extends('layouts.master_bootstrap')
@section('title', '受講生編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>新規投稿</h1>
<form action="{{ route('contents.save') }}" method="post">
    @csrf
    @error('content')
        {{ $message }}
        <br>
    @enderror
    <textarea name="content"  cols="30" rows="10"></textarea>
    <input type="submit" value="投稿">
</form>
@endsection
