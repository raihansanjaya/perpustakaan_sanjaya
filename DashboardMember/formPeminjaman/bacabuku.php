<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../tpm-logo.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TPM | Cek Data SOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
</head>
<body>

        <a class="back-btn" href="Transaksipeminjaman.php">Kembali</a>
        <?php
        // Periksa apakah parameter pdf ada dalam URL
        if (isset($_GET['pdf'])) {
            // Ambil nilai parameter pdf dari URL
            $pdfUrl = urldecode($_GET['pdf']);
            // Tampilkan PDF menggunakan tag <embed>
            echo '<embed class="pdf-container" src="' . $pdfUrl . '" type="application/pdf" width="100%" height="600px" />';
        } else {
            // Jika parameter pdf tidak ditemukan, tampilkan pesan kesalahan
            echo 'Parameter pdf tidak ditemukan.';
        }
        ?>
    </div>
</body>
</html>