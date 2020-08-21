
<div class="row">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Table Data Pemeriksaan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <a href="index.php?p=tambah_pemeriksaan">
            <button class="btn btn-success"><i class="fa fa-plus"></i>&nbsp Tambah Pemeriksaan</button>
          </a>
          <br>
          <br>
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Nama Hewan</th>
              <th>Nama Pemilik</th>
              <th>Nama Dokter</th>
              <th>Nama Obat</th>
              <th>Sakit</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php

          include "koneksi.php";
          $tampil = mysqli_query($mysqli, "SELECT tbl_dokter.*, tbl_hewan.*, tbl_obat.*, tbl_pemeriksaan.* from tbl_pemeriksaan 
            inner join tbl_dokter on tbl_pemeriksaan.kode_dokter=tbl_dokter.kode_dokter
            inner join tbl_hewan on tbl_pemeriksaan.kode_hewan=tbl_hewan.kode_hewan
            inner join tbl_obat on tbl_pemeriksaan.kode_obat=tbl_obat.kode_obat");

          $no =1;
          while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tbody>
              <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $hasil['tanggal']; ?></td>
                <td><?php echo $hasil['nama_hewan']; ?></td>
                <td><?php echo $hasil['nama_pemilik']; ?></td>
                <td><?php echo $hasil['nama_dokter']; ?></td>
                <td><?php echo $hasil['nama_obat']; ?></td>
                <td><?php echo $hasil['sakit']; ?></td>
                <td><?php echo "Rp ".number_format($hasil['harga']); ?></td>
                <td>
                  <a href="index.php?p=edit_pemeriksaan&id=<?php echo $hasil['kode_pemeriksaan']; ?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                  <a href="index.php?p=detail_pemeriksaan&id=<?php echo $hasil['kode_pemeriksaan']; ?>" target="_blank"><button class="btn btn-primary btn-sm"><i class="fa fa-info"></i></button></a>
                </td>
              </tr>
            </tbody>
              <?php }
            ?>
          </table>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->