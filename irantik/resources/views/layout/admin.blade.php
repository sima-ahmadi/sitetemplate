<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iran Tick | Admin</title>
    <link rel="stylesheet" href="/css/bootstrap.rtl.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin">Iran Tik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin">خانه</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin/events">مدیریت کنسرت</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin/tickets">مدیریت بلیط</a>
        </li>
      </ul>
      <form class="d-flex" action="/logout" method="post">
        @csrf
        <button class="btn btn-danger" type="submit">خروج</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
              @if (session()->has('ok'))
                <div class="alert alert-success mb-2" role="alert">{{ session()->get('ok') }}</div>
              @endif
              @if (session()->has('error'))
                <div class="alert alert-danger mb-2" role="alert">{{ session()->get('error') }}</div>
              @endif
              @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="/js/bootstrap.bundle.min.js"></script>
</html>