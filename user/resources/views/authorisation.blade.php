<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>

        html, body {
            height: 100%;
        }

        body {
            background-color: azure;
        }

    </style>

  </head>
  <body>
   
   

    <div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">

        <div class="row bg-white shadow-sm">

           <div class="col border rounded p-4">
            <h3 class="text-center mb-4">Вход</h3>
            <form method="GET" action="{{ route("user.login") }}">
              
        @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">phone</label>
                  <input type="text" class="form-control"  name="phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Пароль</label>
                  <input type="password" class="form-control" name="password">
                </div>
               
                <button type="submit" class="btn btn-primary w-100">Войти</button>
              </form>
           </div>
        </div>
    </div>


  
  </body>
</html>