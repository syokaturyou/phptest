@extends('layouts.master_bootstrap')
@section('title', '受講生編集')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')

<h1>詳細表示</h1>
<div>
  名前{{$student->name}}
</div>
<div>
  メールアドレス{{$student->email}}
</div>
<div>
  電話番号{{$student->tel}}
</div>
<a href="{{ route('student.list') }}" class="btn btn-primary btn-sm">{{ __('一覧に戻る') }}</a>
<a href="{{route('student.edit',['id'=>$student->id])}}" class="btn btn-success btn-sm">{{ __('編集') }}</a>
@endsection