<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics | Welcome</title>
    @vite('resources/js/app.js')
</head>

<body class="vh-100">




<div class="mainnav col-10 m-auto">
    <div><img src=" {{ Vite::asset('resources/images/dc-logo.png') }}" alt=""></div>
    <nav>
        <ul class="ulnav">

                <li class="">
                    <a href="{{ route('comic.index') }}">Home</a>
                </li>

                <li class="">
                    <a href="#">Placeholder</a>
                </li>

                <li class="">
                    <a href="#">Placeholder</a>
                </li>

        </ul>
    </nav>
</div>

<div class="jumbotron jumbotron-fluid bg-dark text-white vh-100 pt-4">
    <div class="container text-center">
        <h1 class="display-4">Benvenuto!</h1>
    </div>
    <div class="container text-center">
        <h1 class="display-4"><a href="{{ route('comic.index') }}" class="font-weight-bold">HOME</a></h1>
    </div>
</div>

</body>

</html>