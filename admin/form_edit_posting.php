<!-- Header -->
<?php
    require 'element/header.php';
    $id = $_GET["id"];
    $berita = mysqli_query($con,"SELECT * FROM posting WHERE id = '$id'");
    while($row = mysqli_fetch_array($berita)) {  
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
        		<form method="post" action="fungsi/edit_posting.php?id=<?= $row['id'];?>" class="text-center">
        			<h3 class="mt-2 mb-4 text-center">Buat Berita</h3>

              <div class="input-group mt-1 mb-1">
                <input type="hidden"  name="id" value="<?= $row['id'];?>">
              </div>

              <div class="input-group mt-1 mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text" style="width: 100px">Judul</span>
                </div>
                <textarea name="judul" class="form-control" aria-label="With textarea"><?= $row['judul'];?></textarea>
              </div>

  				    <div class="input-group mt-1 mb-1">
      					<div class="input-group-prepend">
      				    <span class="input-group-text" style="width: 100px">Kategori</span>
      					</div>
    				    <select class="custom-select" id="inputGroupSelect01" type="text" name="kategori" required>
                  <option value="<?= $row['kategori'];?>"><?= $row['kategori'];?></option>
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

              <h4 class="mt-1 mb-3 text-center">ISI BERITA</h4>
              <div class="input-group mt-1 mb-1">
                <textarea name="isi" class="form-control texteditor" aria-label="With textarea"><?= $row['isi'];?></textarea>
              </div>
				  
				      <button type="button submit" value="OK" class="btn btn-primary mt-1" style="width: 100px; height: 40px;">
                Simpan
              </button>
				    </form>

                <?php
                  }
                ?>

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
