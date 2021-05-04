<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $level = $_POST['level'];

    
        $query = "INSERT INTO sam (username,nama_lengkap,email,password,tgl,alamat,jenis_kelamin,level) VALUES('$username', '$nama_lengkap', '$email', '$password', '$tgl', '$alamat', '$jenis_kelamin', '$level') ";

        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Gagal membuat akun: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            echo "<script>alert('Akun berhasil dibuat');document.location.href='login.php'</script> ";
        }
    }


?>