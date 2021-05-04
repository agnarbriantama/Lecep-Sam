<?php
  error_reporting(0);
  include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin | Pecel Sam</title>

    <style type="text/css">
      nav{
        font-family:  Arial, Helvetica, sans-serif;
        font-size: 20px;
      }

      footer{
        padding: 55px;
        background-color: #fdb900;
        color: #FFFFFF;
        text-align: center;
      }
    </style>
  </head>
  <body id="page-top">

  <header>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-warning" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top">ADMIN</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#">Data Produk <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link js-scroll-trigger" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Logout</a>
          </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#">Disabled</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
<br>
<br>

 <!--tablee---->

  <h1 style="text-align: center;">Data Produk</h1>
  <br>
  <table border="1" style="margin: auto;" width="750x">
    <thead>
      <tr>
        <th>Nomer</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Foto</th>
        <th width="200px">Rubah data</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=0;
      $result = mysqli_query($koneksi, "SELECT * FROM data_produk ORDER BY id ASC");
      while($row = mysqli_fetch_array($result)) {
          $no++
    ?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row['nama_produk'];?></td>
        <td><?php echo $row['harga'];?></td>
        <td><?php echo $row['foto'];?></td>
        <td>
          <a href="" class="btn btn-warning">Edit data</a>
          <a href="" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  


  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
  <!-- footer -->
  <footer>
    <div class="container">
      <small> &copy; Lecep Sam 2021</small>
    </div>
  </footer>
</body>
</html>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>