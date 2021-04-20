<!-- Header -->
<?php
    require 'element/header.php';
    $query = mysqli_query($con,"SELECT * FROM posting ORDER BY id DESC");
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Beranda</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin / Beranda</li>
        </ol>

        <!-- Atas -->
        <div class="row">
            <!-- Tombol Tambah -->
            <div class="col-12  justify-content-end">
                <button type="button" class="btn btn-primary">
                    <a href="form_posting.php"class="text-light" style="text-decoration:none">Tambah Postingan</a>
                </button>
            </div>
            <!-- Table Postingan -->
            <div class="col-12 pt-4">       
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th class="border">No</th>
                            <th class="border">Tanggal</th>
                            <th class="border">Penulis</th>
                            <th class="border">Judul</th>
                            <th class="border">Kategori</th>
                            <th class="border">Poster</th>
                            <th class="border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(mysqli_num_rows($query)>0){ ?>
                    <?php
                        $no = 1;
                         while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td class="text-center border"><?php echo $no; ?></td>
                            <td class="border"><?php echo $row['tanggal']?></td>
                            <td class="border"><?php echo $row['penulis']?></td>
                            <td class="border"><?php echo $row['judul']?></td>
                            <td class="border"><?php echo $row['kategori']?></td>
                            <td class="border text-center">
                                <img src="../img/poster/<?php echo $row['poster']?>" style="width: 7rem;">
                            </td>
                            <td class="border text-center align-middle">
                                <div class="dropdown">
                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="form_edit_posting.php?id=<?php echo $row['id']?>">Edit</a>
                                    <a class="dropdown-item" href="form_ganti_poster.php?id=<?php echo $row['id']?>">Ganti Poster/Sampul</a>
                                    <a class="dropdown-item" href="fungsi/hapus_posting.php?id=<?php echo $row['id']?>">Hapus</a>                                   
                                  </div>
                                </div>                               
                            </td>
                        </tr>
                        <?php $no++; } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
         </script>
        
        <!-- Bawah -->

    </div>
</main>

<!-- Footer -->
<?php
require 'element/footer.php';
?>            
