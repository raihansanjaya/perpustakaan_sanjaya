<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Perpustakaan Ujung Planet</title>
    <link rel="icon" href="assets/library Book Sale.png" type="image/png">
  </head>
  <body style="background:url(assets/bg.jpg) center / cover fixed;">
 
    <!--Navbar-->
    
   
    
  <div class="container-fluid">
    
    <a href="sign/link_login.html" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        
      </ul>
    </div>
    <div class="dropdown">
         
        </div>
  </div>
</nav>


<div><p><h4> </h4></p></div>      
 <br/>
<img src="assets/library Book Sale.png" alt="" srcset="">
 
 <div>
<a class=" btn btn-primary mt-1" href="sign/link_login.html">Get started</a>
</div>
    <section id="homeSection" class="p-5">
      <div class="d-flex flex-wrap justify-content-center">
        <div class="col mt-5">
        
          <?php 
          
          require "config/config.php";
          // query read semua buku
          $buku = queryReadData("SELECT * FROM buku ORDER BY id_buku desc");
          //search buku
          if(isset($_POST["search"]) ) {
            $buku = search($_POST["keyword"]);
          }
          //read buku informatika
          if(isset($_POST["informatika"]) ) {
          $buku = queryReadData("SELECT * FROM buku WHERE kategori = 'informatika'");
          }
          //read buku bisnis
          if(isset($_POST["bisnis"]) ) {
          $buku = queryReadData("SELECT * FROM buku WHERE kategori = 'bisnis'");
          }
          //read buku filsafat
          if(isset($_POST["filsafat"]) ) {
          $buku = queryReadData("SELECT * FROM buku WHERE kategori = 'filsafat'");
          }
          //read buku novel
          if(isset($_POST["novel"]) ) {
          $buku = queryReadData("SELECT * FROM buku WHERE kategori = 'novel'");
          }
          //read buku sains
          if(isset($_POST["sains"]) ) {
          $buku = queryReadData("SELECT * FROM buku WHERE kategori = 'sains'");
          }
          ?>
<style>
    .layout-card-custom {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
    }
  </style>
  

  <!--Btn filter data kategori buku-->
  
       <div class="p-3 mb-2 border bg-warning"></div>
       <form action="" method="post" class="mt-2">
       <div class="input-group d-flex justify-content-end mb-5">
         <input class="border p-2 rounded rounded-end-0 bg-tertiary" type="text" name="keyword" id="keyword" placeholder="cari judul atau kategori...">
         <button class="border border-start-3 bg-outline-primary rounded rounded-start-0" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
       
        </div>
       
      </form>
      
      <!--Card buku-->
      
    <div class="layout-card-custom">
      
       <?php foreach ($buku as $item) : ?>
       <div class="card" style="width: 10rem;">
         <a href="sign/member/sign_in.php"><img src="imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku" height="200px"></a>
         <div class="card-body">
           <h6 class="card-title"><?= $item["judul"]; ?></h6>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Kategori : <?= $item["kategori"]; ?></li>
          </ul>
          <div class="p-3 mb-2 border bg-warning"></div>
        </div>
        
       <?php endforeach; ?>
      </div>
      </div>
      
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <footer id="footer" class="p-1 bg-dark">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center mt-2">
                    <p class="text-light"><i>Copyright © Muhammad Raihan sanjaya     </i></p>
                </div>
            </div>
        </footer>
    <footer>
  </body>
</html>