<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
  <title>Login</title>
</head>

<body>
  <h1>SMK PASUNDAN JATINANGOR</h1>
  <!-- <div class="container"> -->
  <main class="form-signin">
    <form>
      <div class="form-group">
        <label for="exampleInputNama1">Nama</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Isi nama lengkap.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <small id="emailHelp" class="form-text text-muted">isi password dengan 123456 setelah login ganti password</small>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </main>
  <!-- </div> -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>