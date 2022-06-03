<html>
  <head>
　  <title>ユーザー</title>
　</head>
　<body>
　  <h1>ユーザー情報です</h1>
　  
　  <table>
　    <th>id</th>
　    <th>名前</th>
　    <th>メールアドレス</th>
　    <th>パスワード</th>
      @foreach($users as $user)
      <tr>
        <td> {{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
      </tr>
      @endforeach
   </table>
　</body>
</html>
