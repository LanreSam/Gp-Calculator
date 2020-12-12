<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        .container-fluid{
            background-color: #000080;
        }
        .logo{
            color: #fff;
        }
        li{
            list-style: none
        }
        a{
            text-decoration: none;
            font-size: 1.2rem
        }
        .nav-link{
            color: #fff;
        }
        .nav-link:hover{
            background-color: #fff;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <header>
            <nav class="d-flex justify-content-around">
                <div class="logo">
                    <h1>CGPA <small>calc</small></h1>
                </div>

                <ul class="d-flex navbar">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">How It Works</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Developer</a></li>
                </ul>
            </nav>
        </header>
    </div>

    @yield('section')
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
