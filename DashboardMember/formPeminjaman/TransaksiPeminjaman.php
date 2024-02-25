<?php 
session_start();

if(!isset($_SESSION["signIn"]) ) {
  header("Location: ../../sign/member/sign_in.php");
  exit;
}
require "../../config/config.php";

pengembalian();

$akunMember = $_SESSION["member"]["nisn"];
$dataPinjam = queryReadData("SELECT peminjaman.id_peminjaman, peminjaman.id_buku, buku.judul, peminjaman.nisn, member.nama, admin.nama_admin, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.status, buku.isi_buku
                              FROM peminjaman
                              INNER JOIN buku ON peminjaman.id_buku = buku.id_buku
                              INNER JOIN member ON peminjaman.nisn = member.nisn
                              INNER JOIN admin ON peminjaman.id_admin = admin.id
                              WHERE peminjaman.nisn = '$akunMember' AND (peminjaman.status = 'terkonfirmasi' OR peminjaman.status = 'Tunggu konfirmasi')");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
     <title>Transaksi peminjaman Buku || Member</title>
  </head>
  <body>
  <div class="p-3 mb-2 border bg-secondary">
     <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
      <div class="container-fluid p-3">
        <a class="navbar-brand" href="#">
          <img src="../../assets/library Book Sale.png" alt="logo" width="120px">
        </a>
        
        <a class="btn btn-primary" href="../dashboardMember.php">Dashboard</a>
      </div>
    </nav>
    
  <div class="p-4 mt-5">
    
    <div class="mt-5 alert alert-bgwarning" role="alert">Riwayat transaksi Peminjaman Buku Anda  <span class="fw-bold text-capitalize"></span></div>
    
  <div class="table-responsive mt-3">
  <table class="table table-striped table-hover">
        <thead class="text-center text-light">
          <tr>
        <th class="bg-primary text-light">Id Peminjaman</th>
        <th class="bg-primary text-light">Id Buku</th>
        <th class="bg-primary text-light">Judul Buku</th>
        <th class="bg-primary text-light">Nisn</th>
        <th class="bg-primary text-light">Nama</th>
        <th class="bg-primary text-light">Nama Admin</th>
        <th class="bg-primary text-light">Tanggal Peminjaman</th>
        <th class="bg-primary text-light">Tanggal Berakhir</th>
        <th class="bg-primary text-light" width="15%">Aksi</th>
      </tr>
      </thead>
      
      <tr>
      <?php foreach ($dataPinjam as $item) : ?>
              <tr>
                <td><?= $item["id_peminjaman"]; ?></td>
                <td><?= $item["id_buku"]; ?></td>
                <td><?= $item["judul"]; ?></td>
                <td><?= $item["nisn"]; ?></td>
                <td><?= $item["nama"]; ?></td>
                <td><?= $item["nama_admin"]; ?></td>
                <td><?= $item["tgl_peminjaman"]; ?></td>
                <td><?= $item["tgl_pengembalian"]; ?></td>
                <td>
  <?php if ($item["status"] == 'terkonfirmasi') : ?>
    <a class="btn btn-primary" href="bacabuku.php?pdf=<?= urlencode("../../isi-buku/" . $item["isi_buku"]); ?>">Baca Buku</a>
    <a href="pinjam.php?id=<?= $item['id_peminjaman']; ?>" class="btn btn-success">kembalikan Buku</a>
  <?php elseif ($item["status"] == 'Tunggu konfirmasi') : ?>
    <button disabled class="btn btn-warning">Tunggu konfirmasi</button>
  <?php endif; ?>
</td>

              </tr>
            <?php endforeach; ?>

      
    </table>
    </div>
  </div>
  
  
  </body>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
 