<?php

?>

<br/>
<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="get" action="<?php echo site_url('/welcome/') ?>" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Kata Kunci Pencarian">
                  </div>  
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    <br/>

    <div class="alert alert-info">Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong></div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th><th>Mata Kuliah</th><th>Tugas</th><th>Deadline</th>
            <th style="width: 1%;">Aksi</th><th style="width: 1%;">Aksi</th><th style="width: 1%;">Aksi</th>    
        </tr>
        <?php foreach ($result as $r) {
            $akhir = time();
            $tenggat = strtotime($r['deadline']);
            $selisih = $tenggat - $akhir;
            $waktu = floor($selisih / (60 * 60 * 24));
            if($r['selesai'] == 1) {
                echo '<tr class="alert-success">';
                echo '<td >'.$r['id'].'</td><td>'.$r['matakul'].'</td><td>'.$r['judul'].'</td><td>'.$r['deadline'].'</td>';
                echo '<td><a href="'.site_url('/welcome/detail/'.$r['id']).'" class="btn btn-warning">Lihat</a></td>';
                echo '<td><a href="'.site_url('/welcome/update/'.$r['id']).'" class="btn btn-success">Edit</a></td>';
                echo '<td><a href="'.site_url('/welcome/delete/'.$r['id']).'" class="btn btn-danger">Delete</a></td>';
                echo '</tr>';
            } else if ($waktu < 3 && $waktu > 0) {
                echo '<tr class="alert-warning">';
                echo '<td>'.$r['id'].'</td><td>'.$r['matakul'].'</td><td>'.$r['judul'].'</td><td>'.$r['deadline'].'</td>';
                echo '<td><a href="'.site_url('/welcome/detail/'.$r['id']).'" class="btn btn-warning">Lihat</a></td>';
                echo '<td><a href="'.site_url('/welcome/update/'.$r['id']).'" class="btn btn-success">Edit</a></td>';
                echo '<td><a href="'.site_url('/welcome/delete/'.$r['id']).'" class="btn btn-danger">Delete</a></td>';
                echo '</tr>';
            } else if ($waktu <= 0) {
                echo '<tr class="alert-danger">';
                echo '<td>'.$r['id'].'</td><td>'.$r['matakul'].'</td><td>'.$r['judul'].'</td><td>'.$r['deadline'].'</td>';
                echo '<td><a href="'.site_url('/welcome/detail/'.$r['id']).'" class="btn btn-warning">Lihat</a></td>';
                echo '<td><a href="'.site_url('/welcome/update/'.$r['id']).'" class="btn btn-success">Edit</a></td>';
                echo '<td><a href="'.site_url('/welcome/delete/'.$r['id']).'" class="btn btn-danger">Delete</a></td>';
            } else {
                echo '<tr>';
                echo '<td>'.$r['id'].'</td><td>'.$r['matakul'].'</td><td>'.$r['judul'].'</td><td>'.$r['deadline'].'</td>';
                echo '<td><a href="'.site_url('/welcome/detail/'.$r['id']).'" class="btn btn-warning">Lihat</a></td>';
                echo '<td><a href="'.site_url('/welcome/update/'.$r['id']).'" class="btn btn-success">Edit</a></td>';
                echo '<td><a href="'.site_url('/welcome/delete/'.$r['id']).'" class="btn btn-danger">Delete</a></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>

    <br>
    <h4>Keterangan:</h4>
    <table>
        <tr>
            <td width="200pt"> <b>Warna Background</b></td>
            <td width="450pt"> <b>&nbsp;&nbsp;Keterangan</b></td>
        </tr>
        <tr>
            <td class="alert-success"></td>
            <td>&nbsp;&nbsp;Tugas telah selesai dikerjakan</td>
        </tr>
        <tr>
            <td class="alert-danger"></td>
            <td>&nbsp;&nbsp;Tugas telah habis masa pengerjaannya dan tidak dikerjakan</td>
        </tr>
        <tr>
            <td class="alert-warning"></td>
            <td>&nbsp;&nbsp;Masa pengerjaan tugas kurang 3 hari</td>
        </tr>
    </table>

</div>