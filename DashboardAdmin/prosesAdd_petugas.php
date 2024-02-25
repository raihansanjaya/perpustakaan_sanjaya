<?php
 $conn = mysqli_connect("localhost","root","","perpustakaan");

 $nama_admin = $_POST["nama_admin"];
 $password = $_POST["password"];
 $kode_admin = $_POST["kode_admin"];
 $no_tlp = $_POST["no_tlp"];
 $role = $_POST["role"];

 $query = "INSERT INTO admin (nama_admin, password, kode_admin, no_tlp, role) Values ('$nama_admin','$password','$kode_admin','$no_tlp','$role')";
 $result = mysqli_query($conn, $query);

 if(!$result){
    die("Query Error : ".mysqli_errno($conn)."-".mysqli_error($conn));
} else {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='DashboardAdmin.php';</script>";
}

?>