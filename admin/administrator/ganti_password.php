<!-- Header -->
<?php
    require 'element/header.php';
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Ganti Password (Administrator)</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Administrator / Ganti Password</li>
        </ol>

        <!-- Atas -->
        <div class="row justify-content-center">
            <div class="col-6">
                <h4 class="text-center pt-5 mt-5 pb-3">Ganti Password (Administrator)</h4>
                <div class="row justify-content-center">
                    <form method="post" action="fungsi/ganti_password.php" class="text-center" style="width: 60%">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1" style="width: 130px">Password Baru</span>
                          <input name="password" type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <button type="button submit" value="OK" class="btn btn-primary mt-1" style="width: 100px; height: 40px;">
                            Simpan
                        </button>
                    </form>
                </div>
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
