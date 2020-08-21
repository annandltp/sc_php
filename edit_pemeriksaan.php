<?php

include "koneksi.php";
$id = $_GET['id'];
$tampil = mysqli_query($mysqli, "SELECT tbl_dokter.*, tbl_hewan.*, tbl_obat.*, tbl_pemeriksaan.* from tbl_pemeriksaan 
    inner join tbl_dokter on tbl_pemeriksaan.kode_dokter=tbl_dokter.kode_dokter
    inner join tbl_hewan on tbl_pemeriksaan.kode_hewan=tbl_hewan.kode_hewan
    inner join tbl_obat on tbl_pemeriksaan.kode_obat=tbl_obat.kode_obat where kode_pemeriksaan='$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM EDIT DOKTER</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="proses_edit_pemeriksaan.php?id=<?php echo $id;?>" enctype="multipart/form-data">
            <div class="box-body">
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">TANGGAL</label>
                <div class="col-sm-10">
                    <input type="datetime" class="form-control" name="tanggal" value="<?php echo $hasil['tanggal']; ?>" placeholder="TANGGAL" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">NAMA HEWAN</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kode_hewan" data-placeholder="Pilih Hewan">
                        <option name="kode_hewan" value="<?php echo $hasil['kode_hewan'];?>"><?php echo $hasil['nama_hewan'];?></option>
                        <?php
                        $tampil_option = mysqli_query($mysqli,"SELECT * FROM tbl_hewan order by kode_hewan");
                        while ($hasil_option = mysqli_fetch_array($tampil_option))
                        {
                            echo "<option value='".$hasil_option['kode_hewan']."'>".$hasil_option['nama_hewan']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">NAMA DOKTER</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kode_dokter" data-placeholder="Pilih Hewan">
                        <option name="kode_dokter" value="<?php echo $hasil['kode_dokter'];?>"><?php echo $hasil['nama_dokter'];?></option>   
                        <?php
                        $tampil_option = mysqli_query($mysqli,"SELECT * FROM tbl_dokter order by kode_dokter");
                        while ($hasil_option = mysqli_fetch_array($tampil_option))
                        {
                            echo "<option value='".$hasil_option['kode_dokter']."'>".$hasil_option['nama_dokter']."</option>";
                        }
                        ?>                                              
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">NAMA OBAT</label>
                <div class="col-sm-10">
                    <select class="form-control" name="kode_obat" data-placeholder="Pilih Hewan">
                        <option name="kode_obat" value="<?php echo $hasil['kode_obat'];?>"><?php echo $hasil['nama_obat'];?></option>   
                        <?php
                        $tampil_option = mysqli_query($mysqli,"SELECT * FROM tbl_obat order by kode_obat");
                        while ($hasil_option = mysqli_fetch_array($tampil_option))
                        {
                            echo "<option value='".$hasil_option['kode_obat']."'>".$hasil_option['nama_obat']."</option>";
                        }
                        ?>                                              
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">SAKIT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sakit" value="<?php echo $hasil['sakit']; ?>" placeholder="SAKIT" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">HARGA</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" value="<?php echo $hasil['harga']; ?>" placeholder="HARGA" required>
                </div>
            </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">UPDATE</button>

        </div>
        <!-- /.box-footer -->
    </form>
</div>
</div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INFO PENGSISIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    NAMA BARANG DIISI DENGAN TEKS.  
    JENIS BARANG PILIH MAKANAN ATAU MINUMAN
    DAN UNTUK HARGA MODAL, HARGA JUAL DAN STOK DIISI DENGAN ANGKA
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>