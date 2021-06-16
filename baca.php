<?php

require 'koneksi/koneksi.php';

$judul = $_GET["j"];

$berita = mysqli_query($con, "SELECT * FROM posting WHERE judul = '$judul'");

while ($row = mysqli_fetch_array($berita)) {



?>

  <!DOCTYPE html>

  <html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Arisandi</title>

  </head>

  <body>

    <!-- Awal -->

    <div class="container">



      <!-- Header -->

      <div class="row bg-secondary">

        <!-- Judul -->

        <div class="col-12 text-center text-light pt-3 pt-1">

          <h1>Arisandi</h1>

        </div>



        <!-- Navbar -->

        <div class="col-12 text-center pb-3">

          <table>

            <tbody>

              <th>

                <tr>

                  <a href="index.php#home" class="text-light" style="text-decoration:none"> | Home </a>

                </tr>

                <tr>

                  <a href="index.php#posting" class="text-light" style="text-decoration:none"> | Posting </a>

                </tr>

                <tr>

                  <a href="#" class="text-light" style="text-decoration:none"> | About </a>

                </tr>

                <tr>

                  <a href="#" class="text-light" style="text-decoration:none"> | Contact </a>

                </tr>

                <tr>

                  <a href="admin/index.php" class="text-light" style="text-decoration:none"> | Login | </a>

                </tr>

              </th>

  </body>

  </table>

  </div>

  </div>



  <!-- Body -->

  <div class="row mt-1">

    <div class="col-12 text-end">

      <?php

      date_default_timezone_set("Asia/Singapore");

      $tanggal = date("l, d-m-Y");

      ?>

      <h6><?= $tanggal ?></h6>

    </div>

  </div>



  <div class="row pt-3 pb-3 justify-content-center" style="min-height: 720px">



    <!-- Utama -->

    <div class="col-12 ml-2 mr-2 pb-5">

      <h2><?= $row['judul']; ?></h2>

      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">

        <ol class="breadcrumb">

          <li class="breadcrumb-item"><a href="#" class="text-dark" style="text-decoration:none">Posting</a></li>

          <li class="breadcrumb-item" aria-current="page"><?= $row['kategori']; ?></li>

          <li class="breadcrumb-item" aria-current="page"><?= $row['judul']; ?></li>

        </ol>

      </nav>



      <main>

        <?= $row['isi']; ?>

      </main>



      <h6 class="pt-3">Author = <?= $row['penulis']; ?> (<?= $row['tanggal']; ?>)</h6>

    <?php

  }

    ?>

    </div>

  </div>



  <!-- Footer -->

  <div class="row bg-secondary p">

    <div class="col-12 pt-3 pb-3">

      <div class="d-flex align-items-center justify-content-between small">

        <div class="text-light">

          Copyright &copy; Arisandi - 2021

        </div>

      </div>

    </div>

  </div>





  </div>

  <!-- Akhir -->



  <!-- Script -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

  </html>