<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
{{-- font awesome icon --}}
<script src="https://kit.fontawesome.com/48c2562a43.js" crossorigin="anonymous"></script>

    <style>
        body{
            margin: 0;
            padding: 0;
        }
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
            display: none;
        }
        .nav-link:hover{
            background-color: #fff;
            color: #D7BA66;
            transition: all 0.5s;
        }
        .show-links{
            display: block;
            align-items: center
        }
        #calc{
            color: #D7BA66;
        }
        .menu{
            color: #fff;
        }
        @media screen and (min-width:800px){
            .menu{
                display: none;
            }
            .nav-link{
                display: inline;
            }
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <header>
            <nav class="d-flex justify-content-around pt-3 pb-2">
                <div class="logo">
                    <h1>CGPA <small id="calc">calc</small></h1>
                </div>

                <ul class="d-flex navbar">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">How It Works</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Developer</a></li>
                </ul>
                <span class="menu py-2"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></span>
            </nav>
        </header>
    </div>

    @yield('section')
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    const toggleBtn = document.querySelector('.menu');
    const links = document.querySelector('.nav-links');

    toggleBtn.addEventListener('click', function () {
        links.classList.toggle('show-links');
    });
</script>
</html>
