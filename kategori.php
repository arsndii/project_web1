<?php
    require 'koneksi/koneksi.php';
    $kategori = $_GET["k"];
    $query = mysqli_query($con,"SELECT * FROM posting WHERE kategori = '$kategori' ORDER BY tanggal DESC");
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
      <div class="row pt-3 pb-3" style="min-height: 720px">

        <!-- Utama -->
        <div class="col-md-9">
          <!-- Postingan -->
          <div class="row text-center justify-content-center gap-3" id="posting">
            <h3 class="pt-1 pb-1"><?php echo $kategori ?></h3>

            <!-- Card -->

            <?php
              while($row = mysqli_fetch_array($query)){
            ?>

            <div class="card p-2" style="width: 13rem;">
              <img src="img/poster/<?php echo $row['poster']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['judul']?></h5>
                <a href="baca.php?j=<?php echo $row['judul'];?>" class="btn btn-secondary">Buka</a>
              </div>
            </div>
                
            <?php } ?>

          </div>
        </div>

        <!-- Kategori -->
        <div class="col-sm-3 mt-3 border-start border-2 border-secondary">
          <div class="container">
            <div class="row">
              <div class="col-12 border border-2 border-secondary">
                <h4 class="text-center pt-1 pb-1">Kategori</h4>
                <ul>
                  <li>
                    <a href="kategori.php?k=Blog" class="text-dark" style="text-decoration:none"> Blog </a>
                  </li>
                  <li>
                    <a href="kategori.php?k=Berita" class="text-dark" style="text-decoration:none"> Berita </a>
                  </li>
                  <li>
                    <a href="kategori.php?k=Tutorial" class="text-dark" style="text-decoration:none"> Tutorial </a>
                  </li>
                  <li>
                    <a href="kategori.php?k=Mikrotik" class="text-dark" style="text-decoration:none"> Mikrotik </a>
                  </li>
                  <li>
                    <a href="kategori.php?k=Cisco Packet Tracer" class="text-dark" style="text-decoration:none"> Cisco Packet Tracer </a>
                  </li>
                  <li>
                    <a href="kategori.php?k=Debian" class="text-dark" style="text-decoration:none"> Debian </a>
                  </li>
                  <li>
                    <a href="kategori.php?k=Windows Server" class="text-dark" style="text-decoration:none"> Windows Server </a>
                  </li>
                  <li>
                    <a href="kategori.php?k=IT" class="text-dark" style="text-decoration:none"> IT </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="row bg-secondary">
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