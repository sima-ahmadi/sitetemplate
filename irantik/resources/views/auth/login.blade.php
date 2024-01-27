<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iran Tik | Login</title>
    <link rel="stylesheet" href="/css/bootstrap.rtl.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>
                @endif
                <h1>ورود</h1>
                <form action="/login" method="post" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">نام کاربری</label>
                        <input type="text" class="form-control" id="username" placeholder="useranme" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز</label>
                        <input type="password" class="form-control" id="password" placeholder="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">ورود</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>