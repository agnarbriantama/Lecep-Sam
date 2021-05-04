<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Register | Lecep Sam</title>

    <link href="assets/css/regis.css" rel="stylesheet">
</head>

<body>
    <form action="proses.php" method="POST">
        <div >
            <h2 class="text-center">Registrasi Akun</h2>
        </div>

            <div>
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username">
            </div>

            <div >
                <label class="form-label">Nama</label>
                <input type="text" nama="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
            </div>

            <div >
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
            </div>
            <div>
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <div >
                <label class="form-label">Tanggal lahir</label>
                <input type="date" name="tgl" class="form-control" />
            </div>

            <div>
                <label class="form-label">Alamat rumah</label>
                <input type="text" name="alamat" class="form-control" placeholder="Jl.A.yani,Jakarta">
            </div>

            <div>
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin">
                    <option selected disabled selected>Choose...</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-2">
                <label class="form-label">Login sebagai...</label>
                <select class="form-select" name="level">
                    <option selected disabled selected>Pilih...</option>
                    <option value="Pelanggan">Pelanggan</option>   
                </select>
            </div>

            <div>
                <button class="btn btn-lg btn-primary btn-block" name="register" type="submit">Registrasi</button>
                <a class="col-3 mr-auto" href="login.php">Klik jika sudah punya akun</a>
                 <p class="text-center">&copy; Lecep Sam 2021 </p>
            </div>


    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></scrip>


</body>

</html>