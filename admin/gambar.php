<!-- Header -->
<?php
    require 'element/header.php';
    $query = mysqli_query($con,"SELECT * FROM gambar ORDER BY id DESC");
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Gambar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin / Gambar</li>
        </ol>

        <!-- Atas -->
        <div class="row">
            <!-- Tombol Tambah -->
            <div class="col-12  justify-content-end">
                <button type="button" class="btn btn-primary">
                    <a href="form_gambar.php"class="text-light" style="text-decoration:none">Upload Gambar</a>
                </button>
            </div>
            <!-- Table Postingan -->
            <div class="col-12 pt-4">       
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th class="border">Tanggal</th>
                            <th class="border">Keterangan</th>
                            <th class="border">Link</th>
                            <th class="border">Gambar</th>
                            <th class="border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                         while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td class="border"><?php echo $row['tanggal']?></td>
                            <td class="border"><?php echo $row['keterangan']?></td>
                            <td class="border">img/posting/<?php echo $row['nama_file']?></td>
                            <td class="border text-center">
                                <img src="../img/posting/<?php echo $row['nama_file']?>" style="width: 7rem;">
                            </td>
                            <td class="border text-center align-middle">
                                <button type="button" class="btn btn-primary">
                                    <a class="text-light" style="text-decoration:none" href="fungsi/hapus_gambar.php?id=<?php echo $row['id']?>">Hapus</a>
                                </button>
                            </td>
                        </tr>
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
