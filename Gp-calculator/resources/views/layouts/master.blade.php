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
            background-color: #F7F5F4;
        }
        html{
            scroll-behavior: auto;
        }
        ul{
            list-style-type: none;
        }
        a{
            list-style: none;
            text-decoration: none
        }
        /*
        ===============
        Navbar
        ===============
        */
        .top {
        background: #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1)
        }
        .nav-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem;
        }
        .nav-toggle {
            font-size: 1.5rem;
            color: #000080;
            transition: 0.3s all linear;
            cursor: pointer;
        }
        .nav-toggle:hover{
            color: #D7BA66;
            transform: rotate(360deg);
            transition: all 0.7 linear;
        }
        .logo{
            height: 40px;
            font-size: 2.5rem;
            color: #000080;
            font-weight: bold;
        }
        small{
            font-weight: 400;
            color: #D7BA66;
        }
        .nav-link{
            color: #000080;
            font-size: 1.2rem;
            display: block;
            padding-top: 1rem;
            transition: 0.3s all linear;
        }
        .nav-link:hover {
            color: #fff;
            background-color: #000080;
        }
        .links {
            height: 0;
            overflow: hidden;
            transition: 0.3s all linear;
        }
        .show-links{
            height: 10rem;
        }

        @media screen and (min-width: 800px) {
            .nav-center {
                max-width: 1170px;
                margin: 0 auto;
                align-items: center;
                padding: 1rem;
                display: flex;
                justify-content: space-between;
            }
            .nav-header {
                padding: 0;
            }
            .nav-toggle {
                display: none;
            }
            .links {
                height: auto;
                display: flex;
            }
            .nav-link:hover {
            color: #D7BA66;
            background-color: transparent;
            }
        }
    </style>
</head>
<body>

    <div class="container-fluid fixed-top top">
        <header>
            <nav>
                <div class="nav-center">
                  <!-- nav header -->
                  <div class="nav-header">
                    <h1 class="logo d-flex">CGPA <small>calc</small></h1>
                    <button class="nav-toggle btn">
                      <i class="fas fa-bars bars-icon"></i>
                    </button>
                  </div>
                  <!-- links -->
                  <ul class="links">
                    <li class="nav-item">
                      <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a href="/developer" class="nav-link">Developer</a>
                    </li>
                  </ul>
                </div>
            </nav>
        </header>
    </div>

    @yield('content')
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    const toggleBtn = document.querySelector('.nav-toggle');
    const links = document.querySelector('.links');

    toggleBtn.addEventListener('click', function () {
        links.classList.toggle('show-links');
    });
</script>
</html>
