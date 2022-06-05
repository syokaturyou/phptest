@extends('layouts.master_bootstrap')
@section('title', '受講生編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>編集</h1>
  <form action="{{ route('contents.save') }}" method="post">
    @csrf
    @error('content')
      {{ $message }}
      <br>
    @enderror
    <input type="hidden" name="id" value="{{ $content_info->id }}">
      <textarea name="content"  cols="30" rows="10">{{ $content_info->content }}</textarea>
    <input type="submit" value="保存">
  </form>
@endsection