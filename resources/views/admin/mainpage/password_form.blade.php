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
    <form method="post" action="{{url("/admin/creat-validation")}}">
        @csrf
        @method('GET')
        <img class="mb-4" src="#" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please Enter Phone number</h1>

        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="number" name="number" placeholder="name@example.com">
            <label for="floatingInput">Phone Number</label>
            @error("number")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Send Code</button>
        <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
    </form>
</main>
</body>
<body>
</html>
