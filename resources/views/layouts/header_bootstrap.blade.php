<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
  <div class="container">
    <a class="navbar-brand" href="">
      <a class="is-imghover" href="/"><img src="https://popchat.jp/wp-content/themes/wp-popchat/assets/images/common/logo.png" alt="POPCHAT Change the future by the POPCHAT@Cloud"></a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">About</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('users') }}" class="btn btn-primary btn-sm">{{ __('ユーザー一覧') }}</a>
          <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm">{{ __('受講生一覧') }}</a>
          <a href="{{ route('book.index') }}" class="btn btn-primary btn-sm">{{ __('本一覧') }}</a>
          <a href="{{ url('/crud/') }}" class="btn btn-primary btn-sm">{{ __('crud一覧') }}</a>
        </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
<!-- / Navigation -->