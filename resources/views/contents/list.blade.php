@extends('layouts.master_bootstrap')
@section('title', '受講生編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>投稿内容</h1>
<ul>
  <li><a href="{{ route('contents.create') }}">新規投稿</a></li>
</ul>
@foreach ($content_infos as $content_info)
  <div>{{ $content_info->content }}</div>
  <div>{{ $content_info->updated_at }}</div>
  <a href="{{ route('contents.update', ['content_id' => $content_info->id]) }}">編集</a>
  <a href="{{ route('contents.delete', ['content_id' => $content_info->id]) }}">削除</a>
  <br>
@endforeach
@endsection
