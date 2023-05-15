<!doctype html>
<html lang="ru">
<head>
  
  <meta charset="utf-8">
  
  <!-- Настройка viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>add Users</title>
<link href="{{ asset('css/MainStyle.css') }}">
  <!-- Bootstrap CSS (Cloudflare CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- jQuery (Cloudflare CDN) -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap Bundle JS (Cloudflare CDN) -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

  div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">

  <div class="row bg-white shadow-sm">

     <div class="col border rounded p-4">
      <h3 class="text-center mb-4">добавить роль</h3>
      <form method="POST" action="{{ route("role.store") }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputPassword1">Имя роли</label>
          <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
          </div>
          <button type="submit" class="btn btn-primary w-100">добавить</button>
        </form>
     </div>
  </div>
</div>
</body>
</html>