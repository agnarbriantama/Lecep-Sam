<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'pecel');

if (!$koneksi) {
    die("Koneksi dengan database gagal: " . mysql_connect_errno() . mysqli_connect_error());
}
