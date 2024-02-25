<?php
session_start();

if (!isset($_SESSION["signIn"])) {
   header("Location: ../sign/petugas/sign_in.php");
   exit;
}
require "../config/config.php";
$query = mysqli_query($connection, "SELECT * FROM peminjaman WHERE status = 'Tunggu konfirmasi'");
$peminjaman = mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
     <title>Admin Dashboard</title>
  </head>
  <body>
  <div class="p-3 mb-2 border bg-secondary">
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow-sm justify-space-between">
    
  <div class="container-fluid">
    
    
  <a class=" btn btn-primary" href="signOut.php">log out</a>
  </div>
</nav>
    <div class="mt-5 p-4">
      <?php
      // Mendapatkan tanggal dan waktu saat ini
      $date = date('Y-m-d H:i:s'); // Format tanggal dan waktu default (tahun-bulan-tanggal jam:menit:detik)
      // Mendapatkan hari dalam format teks (e.g., Senin, Selasa, ...)
      $day = date('l');
      // Mendapatkan tanggal dalam format 1 hingga 31
      $dayOfMonth = date('d');
      // Mendapatkan bulan dalam format teks (e.g., Januari, Februari, ...)
      $month = date('F');
      // Mendapatkan tahun dalam format 4 digit (e.g., 2023)
      $year = date('Y');
      ?>
      
<img src="../assets/library Book Sale.png" alt="logo" width="50px">
      <h1 class="mt-5 fw-bold">Dashboard - <span class="fs-4 text-warning"> <?php echo $day. " ". $dayOfMonth." ". " ". $month. " ". $year; ?> </span></h1>
      <div class="p-3 mb-2 border bg-secondary">
        <tr>
          <th>
      <div class="bg-warning alert alert-success" role="alert">Selamat datang admin - <span class="fw-bold text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></span> di Dashboard Perpustakaan</div>
      </th>  
    </tr>
      

        <!-- <div class="row gap-2">
        <div class="col bg-info p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="member/member.php">Member</a>
        </div>
        <div class="col bg-success p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="buku/daftarBuku.php">Buku</a>
        </div>
        </div>
        <div class="row gap-2 mt-2">
        <div class="col bg-warning p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="peminjaman/peminjamanBuku.php">Peminjaman</a>
        </div>
        <div class="col bg-dark p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="pengembalian/pengembalianBuku.php">Pengembalian</a>
        </div>
        </div>
        <div class="row mt-2">
        <div class="col bg-danger p-5 rounded">
          <a class="text-center text-decoration-none fs-2 text-light" href="denda/daftarDenda.php">Denda</a>
        </div>
        </div> -->

        <div class="p-4 mt-5">
    
    <div class="mt-5 alert alert-bgwarning" role="alert">Riwayat transaksi Peminjaman Buku Anda - <span class="fw-bold text-capitalize"><?php echo htmlentities($_SESSION["admin"]["nama_admin"]); ?></span></div>
    
  <div class="table-responsive mt-3">
    <table class="table table-striped table-hover">
     <thead class="text-center">
      <tr>
        <th class="bg-warning text-light">Id Peminjaman</th>
        <th class="bg-warning text-light">Id Buku</th>
        <th class="bg-warning text-light">Nisn</th>
        <th class="bg-warning text-light">tgl_peminjaman</th>
        <th class="bg-warning text-light">tgl_pengembalian</th>
        <th class="bg-warning text-light"> status</th>
        <th class="bg-warning text-light">Aksi</th>

      </tr>
      </thead>
      
      <?php foreach ($peminjaman as $data): ?>
                <tr>
                    <td><?= $data["id_peminjaman"]; ?></td>
                    <td><?= $data["id_buku"]; ?></td>
                    <td><?= $data["nisn"]; ?></td>
                    <td><?= $data["tgl_peminjaman"]; ?></td>
                    <td><?= $data["tgl_pengembalian"]; ?></td>
                    <td><?= $data["status"]; ?></td>
                    <td><a href="konfirmasi_peminjaman.php?id=<?= $data['id_peminjaman']; ?>" class="btn btn-success">Konfirmasi</a>  
                </tr>
                <?php endforeach; ?>
    </table>
    </div>
  </div>
      
    </div>
    
    <footer class="shadow-lg bg-subtle p-3">
      <div class="container-fluid d-flex justify-content-between">
      
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>