
<div class="row">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Hewan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <a href="index.php?p=tambah_hewan">
            <button class="btn btn-success"><i class="fa fa-plus"></i>&nbsp Tambah Hewan</button>
          </a>
          <br>
          <br>
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Nama Hewan</th>
              <th>Pemilik Hewan</th>
              <th>Jenis Hewan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php

          include "koneksi.php";
          $tampil = mysqli_query($mysqli, "select * from tbl_hewan");
          $no =1;
          while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tbody>
              <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $hasil['nama_hewan']; ?></td>
                <td><?php echo $hasil['nama_pemilik']; ?></td>
                <td><?php echo $hasil['jenis_hewan']; ?></td>
                <td>
                  <a href="index.php?p=edit_hewan&id=<?php echo $hasil['kode_hewan']; ?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                  <a onclick="return confirm('apakah anda yakin? ');" href="proses_delete_hewan.php?id=<?php echo $hasil['kode_hewan']; ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                </td>
              </tr>
              <?php

            }

            ?>
          </table>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
</div>