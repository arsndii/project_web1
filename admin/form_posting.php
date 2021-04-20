<!-- Header -->
<?php
    require 'element/header.php';
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Form Posting Berita</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin / Form / Form Posting Berita</li>
        </ol>

        <!-- Atas -->
        <div class="row justify-content-center">
        	<div class="col-6">
        		<form method="post" action="fungsi/simpan_posting.php" class="text-center" enctype="multipart/form-data">
        			<h3 class="mt-2 mb-4 text-center">Buat Berita</h3>

				  <div class="input-group mt-1 mb-1">
                     <input type="hidden"  name="penulis" value="<?= $_SESSION['username'];?>">
                  </div>

                  <div class="input-group mt-1 mb-1">
                     <div class="input-group-prepend">
                       <span class="input-group-text" style="width: 100px">Judul</span>
                     </div>
                     <textarea name="judul" class="form-control" aria-label="With textarea"></textarea>
                  </div>

				  <div class="input-group mt-1 mb-1">
					 <div class="input-group-prepend">
					   <span class="input-group-text" style="width: 100px">Kategori</span>
					 </div>
					 <select class="custom-select" id="inputGroupSelect01" type="text" name="kategori" required>
                        <option value="">- Pilih Kategori -</option>
                        <option value="Blog">Blog</option>
                        <option value="Berita">Berita</option>
                        <option value="Tutorial">Tutorial</option>
                        <option value="Mikrotik">Mikrotik</option>
                        <option value="Cisco Packet Tracer">Cisco Packet Tracer</option>
                        <option value="Debian">Debian</option>
                        <option value="Windows Server">Windows Server</option>
                        <option value="IT">IT</option>
                        <option value="-">-</option>
                     </select>
				  </div>

                  <div class="input-group mt-1 mb-3">
                     <div class="input-group-prepend">
                       <span class="input-group-text" style="width: 100px">Poster</span>
                     </div>
                     <input class="pl-2 pr-2 pt-1 pb-2 form-control" type="file" name="file">
                  </div>

                  <h4 class="mt-1 mb-3 text-center">ISI BERITA</h4>

                  <div class="input-group mt-1 mb-1">
                     <textarea name="isi" class="form-control texteditor" aria-label="With textarea"></textarea>
                  </div>
				  
				  <button type="button submit" value="OK" class="btn btn-primary mt-1" style="width: 100px; height: 40px;">
                     Simpan
                  </button>
				</form>

                <!-- panggil ckeditor.js -->
                <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
                <!-- panggil adapter jquery ckeditor -->
                <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>
                <!-- setup selector -->
                <script type="text/javascript">
                    $('textarea.texteditor').ckeditor();
                </script>

        	</div>
        </div>
        <!-- Bawah -->

    </div>
</main>

<!-- Footer -->
<?php
require 'element/footer.php';
?>            
