<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Test Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Продажа билетов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Список Администраторов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cruises')}}">Автобусы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Статистика</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Пассажиры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Расписание</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">История</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
<div class="container">
    @yield('content')
</div>
</body>
</html>
