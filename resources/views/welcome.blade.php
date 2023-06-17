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
                    <a href="{{ route('comic.create') }}">Create</a>
                </li>

        </ul>
    </nav>
</div>

<div class=" bg-dark text-white vh-100 pt-4 d-flex justify-content-center align-items-center">
    <div class="container text-center">
        <h1 class="">Benvenuto! Guarda tutti i Comics che abbiamo</h1>
    </div>
    <div class="container text-start text-decoration-none">
        <h1 class="display-4"><a href="{{ route('comic.index') }}" class="fw-bolder text-decoration-none">Contenuto</a></h1>
    </div>
</div>

</body>

</html>