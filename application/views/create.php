<?php
	if (!isset($update)) {
		$update = array('id' => '', 'matakul' => '', 'judul' => '', 'deskripsi' => '', 'jenis' => '', 'deadline' => '');
	} else {
		$update_flag = '<input type="hidden" name="updateID" value="'.$update['id'].'">';
	}
?>

<br/>
<div class="container">

    <?php if (isset($update_flag)) { 
        echo '<div class="alert alert-info">Anda akan mengubah data taruna <strong>'.$update['judul'].'</strong></div>';
      } ?>
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('/welcome/save') ?>">
              <div class="form-group">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $update['id'] ?>">
              </div>
              <div class="form-group">
                <label for="id">Nama Matkul</label>
                <input type="text" class="form-control" name="matakul" id="matakul" value="<?php echo $update['matakul'] ?>" placeholder="Mata Kuliah">
              </div>
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $update['judul'] ?>" placeholder="Judul">
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?php echo $update['deskripsi'] ?>" placeholder="Deskripsi">
              </div>
              <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" class="form-control" name="deadline" id="deadline" value="<?php echo $update['deadline'] ?>" placeholder="Deadline">
              </div>
              <?php if (isset($update_flag)) { 
                  echo $update_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>