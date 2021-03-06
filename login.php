<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Login | Lecep Sam</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="assets/css/floating-labels.css" rel="stylesheet">
</head>

<body>
  <style>
    h1 {
      color: black;
      font-family: 50px Arial, Helvetica, sans-serif;

    }
  </style>
  <form class="form-signin" method="POST" action="cek_login.php">
    <div class="text-center mb-4">
      <img class="mb-4" src="assets/brand/LECEP SAM.png" alt="" width="150" height="150" style="border-radius: 50%;">
      <h1>Silahkan Login</h1>

    </div>

    <div class="form-label-group">
      <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda!" required autofocus>
      <label>Username</label>
    </div>

    <div class="form-label-group">
      <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda!" required>
      <label>Password</label>
    </div>

    <div class="form-label-group">
      <select class="form-control" name="level">
        <option>Login sebagai...</option>
        <option value="Pelanggan">Pelanggan</option>
        <option value="Admin">Admin</option>
      </select>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" class="pull-right"> Remember me
      </label>
      <a class="col-3 mr-auto" href="registrasi.php">Belum punya akun ?</a>

    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; Lecep Sam 2021 </p>
  </form>
</body>

</html>