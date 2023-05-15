<!doctype html>
<html lang="ru">
<head>
  
  <meta charset="utf-8">
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>add Users</title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- jQuery (Cloudflare CDN) -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap Bundle JS (Cloudflare CDN) -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">

    <div class="row bg-white shadow-sm">

       <div class="col border rounded p-4">
        <h3 class="text-center mb-4">добавить юзера</h3>
        <form method="POST" action="{{ route("user.register") }}">
          @csrf
          <div class="form-group">
            <label for="exampleInputPassword1">Имя</label>
            <input type="text" class="form-control"  name="name">
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">телефон</label>
              <input type="text" class="form-control"  name="phone">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Пароль</label>
              <input type="password" class="form-control"  name="password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"> повторите пароль</label>
              <input type="password" class="form-control"  name="confirmpassword">
            </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">добавить</button>
          </form>
       </div>
    </div>
</div>
</body>
</html>