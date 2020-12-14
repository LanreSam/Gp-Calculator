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
            background: url('images/background.jpg');
            background-size: cover;
            background-position: center 30%;
            background-attachment: fixed;
            background-repeat: no-repeat;
            width: 100%;
        }
        .main{
            background: rgba(0, 0, 0, 0.6);
            width: 100vw;
            height: 100vh;
        }
        .container{
            display: block;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        a{
            text-decoration: none;
            color: #000080;
        }
        #login, #register{
            background-color: white;
            color: #000080;
            padding: 10px 70px;
        }
        #login:hover{
            background-color: #000080;
            color: #fff;
            transition: all 0.3s linear;
        }
        #register{
            background-color: transparent;
            color: #fff;
            border: #fff 2px solid;
            margin-left: 20px;
        }
        #register:hover{
            background-color: #fff;
            color: #000080;
            border: none;
            transition: all 0.3s linear;
        }

    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 main">
                <div class="container">
                    <h1>Home page</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, itaque perspiciatis? Sed debitis veniam temporibus
                        praesentium consequatur placeat aperiam animi necessitatibus iusto voluptatem aspernatur accusantium a ad,
                        distinctio perspiciatis? Quisquam.
                    </p>
                    <div class="btn-links d-flex">
                        <a href="#" id="login">Login</a>
                        <a href="#" id="register">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>

