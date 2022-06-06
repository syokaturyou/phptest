@extends('layouts.master_bootstrap')
@section('title', 'ユーザー一覧')
@section('stylesheet')
<link rel="stylesheet" href="css/toiawase.css"/>
@endsection
@section('content')
<div class="table-responsive">
<table class="table" style="width: 1000px; max-width: 0 auto;">
   <tr class="table-info">
     <th scope="col" width="10%">#</th>
     <th scope="col" width="15%">名前</th>
     <th scope="col" width="30%">Email</th>
     <th scope="col" width="15%">TEL</th>
     <th scope="col" width="30%" colspan="3">OPTION</th>
   </tr>

   </table>
   </div>
   <!--/テーブル-->
<!-- ページネーション -->
@endsection
