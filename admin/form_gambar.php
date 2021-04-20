<!-- Header -->
<?php
    require 'element/header.php';

?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Form Upload Gambar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin / Form / Form Upload Gambar</li>
        </ol>

        <!-- Atas -->
        <div class="row justify-content-center">
        	<div class="col-4">
        		<form method="post" action="fungsi/simpan_gambar.php" class="text-center" enctype="multipart/form-data">
        			<h3 class="mt-2 mb-4 text-center">Upload Gambar</h3>

				  <div class="input-group mt-1 mb-1">
					 <div class="input-group-prepend">
					   <span class="input-group-text">File</span>
					 </div>
					 <input class="pl-2 pr-2 pt-1 pb-2 form-control" type="file" name="file">
				  </div>

				  <div class="input-group mt-1 mb-1">
					 <div class="input-group-prepend">
					   <span class="input-group-text">Keterangan</span>
					 </div>
					 <textarea name="keterangan" class="form-control" aria-label="With textarea"></textarea>
				  </div>
				  
				  <button type="button submit" value="OK" class="btn btn-primary mt-1" style="width: 100px; height: 40px;">
                     Simpan
                  </button>
				</form>
        	</div>
        </div>
        <!-- Bawah -->

    </div>
</main>

<!-- Footer -->
<?php
require 'element/footer.php';
?>            
