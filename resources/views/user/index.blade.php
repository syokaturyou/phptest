@extends('layouts.master_bootstrap')
@section('title', 'ユーザー一覧')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<h1>ユーザー情報です</h1>
　<table>
　  <a href="{{ route('user.create') }}" class="btn btn-success btn-sm">新規作成</a>
　  <th>id</th>
　  <th>名前</th>
　  <th>メールアドレス</th>
　  <th>パスワード</th>
　  <th>更新日時</th>
　  <th>情報全般</th>
  @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->updated_at}}</td>
      <td>{{$user}}</td>
      <td>
          <a href="{{route('user.show',['id'=>$user->id])}}" class="btn btn-primary btn-sm">詳細</a>
          <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-primary btn-sm">編集</a>
          <a>
            <form method="POST" action="{{route('user.destroy',['id'=>$user->id])}}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">削除</button>
            </form>
          </a>
        </td>
    </tr>
  @endforeach
</table>
@endsection
