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
            background: url('images/bg.jpg');
            background-size: cover;
            background-position: center 30%;
            background-attachment: fixed;
            background-repeat: no-repeat;
            width: 100%;
        }
        .main{
            background: rgba(0, 0, 0, 0.6);
            min-height: 100vh;
            display: grid;
            place-items: center;
            color: #fff;
        }

        a{
            text-decoration: none;
            color: #000080;
            cursor: pointer;
            font-size: 1.2rem;
        }
        .login{
            padding: 10px 70px;
            background-color: #fff;
            color: #000080;
        }
        .login:hover{
            background-color: #000080;
            color: #fff;
        }
        .reg{
            padding: 10px 70px;
            border: 2px groove #fff;
            color: #fff;
            margin-top: 30px;
        }
        .reg:hover{
            background-color: #fff;
            color: #000080;
            border: none;
        }
        .button-container{
            display: grid;
        }
        .head{
            font-size: 4.5rem;
            font-weight: bold;
        }
        #calc{
            color: #D7BA66;
            font-weight: 500;
        }
        @media screen and (min-width:500px){
            .button-container{
                display: flex;
                justify-content: center;
            }
            .reg{
                margin-left: 30px;
                margin-top: auto;
            }
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 main">
                <main>
                    <div class="container text-center">
                      <h1 class="head mb-4">CGPA <small id="calc">calc</small></h1>
                      <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, quae quisquam placeat, iure autem atque at
                          beatae ea modi corrupti perferendis mollitia, dolorem ex. Sed beatae corrupti enim expedita voluptatem.
                      </p>
                      <div class="button-container mt-5">
                        <a class="login" href="/login">Login</a>
                        <a class="reg" href="/register">Register</a>
                      </div>
                    </div>
                </main>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>

