

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Pendaftaran Petugas</title>

</head>
<body>
    <div class="p-3 mb-2 bg-dark" >
    <div class="container">
        <div class="card mt-4">
    <div class="card-header text-center text-white bg-info" >
       Pendaftaran Petugas
    </div>
    <div class="card-body">
      <div class="text-center text-secondary mb-2" ><small>SIlahkan Di isi!!</small></div>
    </div>
    <form action="prosesAdd_petugas.php" method="post" >
     <div class="row mx-5" >
        <div class="col-md-12 mb-3">
            <label for="">Nama Admin</label>
            <input type="text" name="nama_admin" id="" class="form-control" placeholder="Masukan nama admin" >
        </div>
        <div class="col-md-12 mb-3">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="Masukan Password" >
        </div>
        <div class="col-md-12 mb-3">
            <label for="">kode admin</label>
            <input type="text" name="kode_admin" id="" class="form-control" placeholder="masukan kode admin" >
        </div>
        <div class="col-md-12 mb-3">
            <label for="">No Telepon</label>
            <input type="number" name="no_tlp" id="" class="form-control" placeholder="No telepon" >
        </div>
         <div class="col-md-12 mb-3" >
            <label for="">Sebagai</label>
          <select name="role" id="" class="form-control" >
          <option value="">Pilih : </option>
          <option value="admin">admin</option>
          <option value="petugas">petugas</option>
          </select>
         </div>
         <div class="row col-md-8 mb-2 mx-auto" >
            <button type="submit" class="btn btn-success">Tambah</button>
         </div>
         </form>
     </div>
</div>
</div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>