<!--テーブル-->
<div class="table-responsive">
<table class="table" style="width: 1000px; max-width: 0 auto;">
   <tr class="table-info">
     <th scope="col" width="10%">#</th>
     <th scope="col" width="15%">名前</th>
     <th scope="col" width="30%">Email</th>
     <th scope="col" width="15%">TEL</th>
     <th scope="col" width="30%" colspan="3">OPTION</th>
   </tr>

  @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->tel}}</td>
      <td><button type="button" class="btn btn-success">詳細</button></td>
      <td><button type="button" class="btn btn-primary">編集</button></td>
      <td><button type="button" class="btn btn-danger">削除</button></td>
   </tr>
   @endforeach
   </table>
   </div>
   <!--/テーブル-->

<!-- ページネーション -->
{!! $students->render() !!}