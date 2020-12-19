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
        .fas{
            color: gray;
        }
        .main{
            min-height: 100vh;
            display: grid;
            place-items: center;
        }
        .card{
            margin-top: 20%;
        }
        #calc{
            color: #D7BA66;
            font-weight: 500;
        }
        @media screen and (min-width:500px){
            .card{
                margin-top: 3%;
                margin-bottom: 3%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <main>
                <div class="col-md-6 offset-md-3">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <a href="/"><i class="fas fa-arrow-left fa-lg pt-2 mt-1"></i></a>
                                <h3 class="text-muted">Register</h3>
                                <h5 class="text-muted pt-2">CGPA <small id="calc">calc</small></h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" class="p-3">
                                @csrf
                                <div class="form-group">
                                    <label for="name">First name</label>
                                    <input type="text" class="form-control mb-4" id="name" name="name" required placeholder="Enter First name..."/>

                                      @error('name')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Last name</label>
                                    <input type="text" class="form-control mb-4" id="name" name="name" required placeholder="Enter Last name..."/>

                                      @error('name')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <label for="level">Current Level</label>
                                    <input type="text" class="form-control mb-4" id="level" name="level" placeholder="Enter your current Level e.g 100, 200, 300..."/>

                                      @error('level')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <label for="department">Department <small class="text-muted">e.g Accounting</small></label>
                                    <input type="text" class="form-control mb-4" id="department" name="department" required placeholder="Enter Department..."/>

                                      @error('department')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <label for="matric">Matric Number</label>
                                    <input type="text" class="form-control mb-4" id="matric" name="matric" required placeholder="Enter Matric Number..."/>

                                      @error('matric')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                </div>
                                <div class="form-group">
                                  <label for="email">Email address</label>
                                  <input type="email" class="form-control mb-4" id="email" name="email" required placeholder="Enter Email..."/>

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" required placeholder="Enter Password..."/>

                                  @error('password')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary mt-4 px-5 py-2">Register</button>
                                    <small class="mt-4 pt-2">Already a user? | <a href="/login">Login</a></small>
                                </div>
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

