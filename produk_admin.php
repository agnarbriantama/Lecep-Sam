<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='login.php'</script>";
}
?>		

<?php
  error_reporting(0);
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lecep Sam</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
		<h1>HALAMAN ADMIN</h1>
		<ul>
			<li><a href="Produk_admin.php">Cek Produk</a></li>
			<li><a href="data_pembelian.php">Cek Pembelian</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		</div>
	</header>
	</header>

	<!-- about -->
	<section class="about">
		<h1 style="text-align: center;">Data Produk</h1>
  <br>
  <table border="1" style="margin: auto;" width="750x">
    <thead>
      <tr>
        <th>Nomer</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Foto</th>
        <th width="150px">Ubah Data</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=0;
      $result = mysqli_query($koneksi, "SELECT * FROM data_produk ORDER BY id_produk ASC");
      while($row = mysqli_fetch_array($result)) {
          $no++
    ?>
      <tr align="center">
        <td><?php echo $no;?></td>	
        <td><?php echo $row['nama_produk'];?></td>
        <td><?php echo $row['harga'];?></td>
        <td><?php echo $row['foto'];?></td>
        <td>
          <a href="" class="btn btn-warning">Edit data</a>
          <br>
          <a href="" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<!-- footer -->
	<footer>
		<div class="container">
			<small> &copy; Lecep Sam 2021</small>
		</div>
	</footer>
</body>
</html>