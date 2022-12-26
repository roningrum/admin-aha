<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/signin.css">

    <title>Ambulance Hebat Web Login</title>
  </head>

  <body>
    <main>
      <div class="container-login">
        <div class="wrap-login">
            <form action="{{url('proses_login')}}" method="POST" class="login-form text-center">
                <img class="mt-4 mb-4" src="img/ahha_logo.png" alt="logo-ambulancehebat" height="150">
                <h1 class="login-form-title">Login Admin Web</h1>
               @csrf
                <div class="form-floating mb-3">
                  <input type="text" name="username" id="username" class="input-form form-control" placeholder="username">
                  <label for="username">Username</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="password" placeholder="Password">
                  <label for="password">Password</label>
                </div>
                <div class="container-login-btn-form mt-4">
                    <button class="login-btn-form" type="submit">
                        Masuk
                      </button> 
                </div>
            </form>
            <div class="login-more" style="background-image: url('img/bg-01.png');">
            </div>
        </div>
    </div>
       
    </main>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>