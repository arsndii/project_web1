<!-- Header -->
<?php
    require 'element/header.php';
    $query = mysqli_query($con,"SELECT * FROM user WHERE level = 'user' ORDER BY id DESC ");
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">User Management</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Administrator / User Management</li>
        </ol>

        <!-- Atas -->
        <div class="row">
            <!-- Tambah User -->
            <div class="col-6">
                <h4 class="text-center pt-5 mt-5 pb-3">Tambah User</h4>
                <div class="row justify-content-center">
                    <form method="post" action="fungsi/simpan_user.php" class="text-center" style="width: 60%">
                        <div class="input-group mt-1 mb-1">
                            <input type="hidden"  name="level" value="user">
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1" style="width: 95px">Username</span>
                          <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1" style="width: 95px">Password</span>
                          <input name="password" type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <button type="button submit" value="OK" class="btn btn-primary mt-1" style="width: 100px; height: 40px;">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
            <!-- Daftar User -->
            <div class="col-6">
                <h4 class="text-center pb-3">Daftar User Aktif</h4>     
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th class="border">Username</th>
                            <th class="border">Password</th>
                            <th class="border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                         while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td class="border"><?php echo $row['username']?></td>
                            <td class="border"><?php echo $row['password']?></td>
                            <td class="border text-center">
                                <button type="button" class="btn btn-primary">
                                    <a class="text-light" style="text-decoration:none" href="fungsi/delete_user.php?id=<?php echo $row['id']?>">Hapus</a>
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
