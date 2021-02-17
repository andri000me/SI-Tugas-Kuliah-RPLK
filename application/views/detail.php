<?php
	if (!isset($detail)) {
		$detail = array('id' => '', 'matakul' => '', 'judul' => '', 'deskripsi' => '', 'jenis' => '', 'deadline' => '', 'selesai' => '');
	} else {
		$detail_flag = '<input type="hidden" name="detailID" value="'.$detail['id'].'">';
	}
?>

<br/>
<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('/welcome/selesaideh') ?>">
              <div class="form-group">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $detail['id'] ?>">
              </div>
              <?php if (isset($detail_flag)) {
                echo '<h2>Mata Kuliah : <strong>'.$detail['matakul'].'</strong></h2><br>';
                echo '<h4>'.$detail['judul'].'</h4>';
                echo '<p>'.$detail['deskripsi'].'</hp>';
                } ?>

              <div class="form-group">
                <label for="deadline">Deadline</label>
                <?php if (isset($detail_flag)) {
                    if($detail['selesai'] == 0) {
                        $akhir = time();
                        $tenggat = strtotime($detail['deadline']);
                        $selisih = $tenggat - $akhir;
                        if(floor($selisih / (60 * 60)) <= 0) {
                            echo '<h5><strong>Maaf</strong> Tugas Anda habis waktunya<br>';
                        } else {
                            echo '<h5><strong>'.$detail['deadline'].'</strong><br>
                            Ayo Kerjakan tinggal '.floor($selisih / (60 * 60)).' jam lagi!</h5>';
                        }
                        
                    } else {
                        echo '<h5><strong>Mantap</strong> Tugas Anda telah selesai<br>';
                    }
                
                } ?>
              </div>
              <?php if ($detail['selesai'] == 0) {
                echo '<div class="form-check">';
                  echo '<input class="form-check-input" type="checkbox" value="1" id="selesai" name="selesai">';
                  echo '<label class="form-check-label" for="defaultCheck1">Sudah Selesai?</label>';
                echo '</div>';
              } else {
                echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" value="0" id="selesai" name="selesai" checked>';
                    echo '<label class="form-check-label" for="defaultCheck1">Sudah Selesai?</label>';
                echo '</div>';
              } ?>

              <?php if (isset($detail_flag)) { 
                  echo $detail_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>