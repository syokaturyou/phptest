@extends('layouts.master_bootstrap')
@section('title', 'ユーザー一覧')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
  <h1>ユーザー情報です</h1>
　<table>
　  <th>id</th>
　  <th>名前</th>
　  <th>メールアドレス</th>
　  <th>パスワード</th>
    @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
      </tr>
    @endforeach
  </table>
@endsection
