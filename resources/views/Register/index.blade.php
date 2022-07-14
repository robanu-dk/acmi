<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .satu {
            background-image: url('../../gambar/cover.png');
            background-color: black;
            background-repeat: no-repeat;
            height: 600px;
            width: 100%;
            background-size: 100%;
        }

        .warna {
            background: #6C1FB6 !important;
        }

        .warna2 {
            color: white;
        }

        .nav-linked {
            display: block;
            padding: .5rem 1rem;
            color: #c0add1;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
        }

        .nav-linked:hover {
            color: azure
        }

        .nav-linked.active {
            color: #ffffff;
            border-color: #dee2e6 #dee2e6 #fff
        }

        .nav-linked.button {
            color: #ffffff;
        }

        .navbar-naver {
            display: flex;
            flex-direction: column;
            margin-right: 0;
            margin-bottom: 0;
            list-style: none
        }

    </style>
    <title>Login | ACMI 2022</title>
</head>

<body class="text-center">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <div class="satu">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light warna">
            <div class="container" style="height: 50 px">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="navbar-brand">
                            <a class="nav-linked {{ $judul === 'Home | ACMI 2022' ? 'active' : ' ' }}"
                                aria-current="page" href="/">Home</a>
                        </li>
                        <li class="navbar-brand">
                            <a class="nav-linked {{ $judul === 'Event | ACMI 2022' ? 'active' : ' ' }}"
                                aria-current="page" href="/competition">Competition</a>
                        </li>
                        <li class="navbar-brand">
                            <a class="nav-linked {{ $judul === 'Event | ACMI 2022' ? 'active' : ' ' }}"
                                aria-current="page" href="/tabligh-akbar">Tabligh Akbar</a>
                        </li>
                        <li class="navbar-brand">
                            <a class="nav-linked {{ $judul === 'QNA | ACMI 2022' ? 'active' : ' ' }}"
                                href="/qna">QnA</a>
                        </li>
                        <li class="navbar-brand">
                            <a class="nav-linked {{ $judul === 'About | ACMI 2022' ? 'active' : ' ' }}"
                                href="/about">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="form-signin" style="width: 80%; margin:auto; padding-top:100px">
            @if (session()->has('registerError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    style="width: 600px; margin:auto; margin-bottom: 30px">
                    {{ session('registerError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/register" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Please Register</h1>

                <div class="form-floating" style="width: 600px; margin:auto;">
                    <input type="text" name="name" class="form-control" id="name" placeholder="name"
                        required>
                    <label for="floatingPassword">Name</label>
                </div>
                <div class="form-floating" style="width: 600px; margin:auto;  margin-top:25px;">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                        autofocus required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating" style="width: 600px; margin:auto;  margin-top:25px;">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating" style="width: 600px; margin:auto;  margin-top:25px;">
                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Password"
                        required>
                    <label for="floatingPassword">Retype Password</label>
                </div>
                <button type="submit" class="btn" style="background: #6C1FB6 !important; color: white;width: 150px; margin:auto; margin-top:25px;">Register</button>
            </form>

            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</body>

</html>
