<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body class="text-center" data-new-gr-c-s-check-loaded="14.1074.0" data-gr-ext-installed="">



<main class="form-sign-in w-25 m-auto  mt-5">
    <form method="POST" action="{{url("/admin/login")}}">
        @csrf
        @method('POST')
        <img class="mb-4" src="#" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Admin Panel </h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="user_name" placeholder="admin">
            <label for="floatingInput">Username</label>
            @error("user_name")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error("password")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me">
                Remember me
            </label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <a href="/admin/forgetPassword">Forget my password</a>
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
    </form>
</main>
</body>
</html>
