<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
      <!--Bootstrap CSS -->
      {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https:/use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
  </head>
  <body class="d-flex flex-column">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https:/code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https:/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https:/stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    
      <!-- ヘッダー -->
    @include('layouts.header_bootstrap')
    <!-- コンテンツ -->
    @yield('content')
    <!-- フッター -->
    @include('layouts.footer_bootstrap')
  </body>
</html>
