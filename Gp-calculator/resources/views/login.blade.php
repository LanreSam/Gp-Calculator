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
        .fas{
            color: gray;
        }
        .main{
            min-height: 100vh;
            display: grid;
            place-items: center;
        }
        .card{
            margin-top: 50%;;
        }
        @media screen and (min-width:500px){
            .card{
            margin-top: 30%;;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <main>
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <a href="/"><i class="fas fa-arrow-left fa-lg pt-3"></i></a>
                                <h3 class="text-muted">Login</h3>
                                <h5 class="text-muted">CGPA <small>calculator</small></h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" class="p-3">
                                @csrf
                                <div class="form-group">
                                  <label for="email">Email address</label>
                                  <input type="email" class="form-control mb-4" id="email" name="email">

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" id="password" name="password">

                                  @error('password')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>

