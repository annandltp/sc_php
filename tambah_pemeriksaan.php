<?php
include "koneksi.php";
?>

<div class="row">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">FORM TAMBAH PEMERIKSAAN</h3>
      <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="proses_tambah_pemeriksaan.php" method="post" enctype="multipart/form-data" >
      <div class="modal-body" style="min-height: 200px">
        <div class="control-group">
          <!-- <div class="control-group">
            <label class="control-label">Tanggal</label>
            <div class="controls">
              <input type="date" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y H:i:s');?>" class="form-control" name="tanggal" placeholder="Tanggal">
            </div>
          </div> -->
          <label class="control-label">Nama Hewan</label>
          <div class="controls">
            <select id="kode_hewan" class="form-control" name="kode_hewan" data-placeholder="Pilih Hewan">
              <option value=""> = Pilih Daftar Hewan = </option>
              <?php
              $tampil = mysqli_query($mysqli,"SELECT * FROM tbl_hewan order by kode_hewan");
              while ($hasil = mysqli_fetch_array($tampil))
              {
                echo "<option value='".$hasil['kode_hewan']."'>".$hasil['nama_hewan']."</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div id="detail_hewan"></div>
        <div class="control-group">
          <label class="control-label">Nama Dokter</label>
          <div class="controls">
            <select id="kode_dokter" class="form-control" name="kode_dokter" data-placeholder="Pilih Dokter">
              <option value=""> = Pilih Daftar Dokter = </option>
              <?php
              $tampil = mysqli_query($mysqli,"SELECT * FROM tbl_dokter order by kode_dokter");
              while ($hasil = mysqli_fetch_array($tampil))
              {
                echo "<option value='".$hasil['kode_dokter']."'>".$hasil['nama_dokter']."</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Nama Obat</label>
          <div class="controls">
            <select id="kode_obat" class="form-control" name="kode_obat" data-placeholder="Pilih Obat">
              <option value=""> = Pilih Daftar Obat = </option>
              <?php
              $tampil = mysqli_query($mysqli,"SELECT * FROM tbl_obat order by kode_obat");
              while ($hasil = mysqli_fetch_array($tampil))
              {
                echo "<option value='".$hasil['kode_obat']."'>".$hasil['nama_obat']."</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Sakit</label>
          <div class="controls">
            <input type="text" class="form-control" name="sakit" placeholder="Sakit">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Harga</label>
          <div class="controls">
            <input type="text" class="form-control" name="harga" placeholder="Harga">
          </div>
        </div>

      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">TAMBAH</button>
      </div>
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
        NAMA HEWAN DIISI DENGAN TEKS.  
        JENIS BARANG PILIH MAKANAN ATAU MINUMAN
        DAN UNTUK HARGA MODAL, HARGA JUAL DAN STOK DIISI DENGAN ANGKA
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $("#kode_hewan").change(function(){
      var kode_hewan = $("#kode_hewan").val();
      $.ajax({
        datatype: "json", 
        type: "POST",
        url : "ajax_detail_hewan.php",
        data: "kode_hewan="+kode_hewan,
        cache:false,
        success: function(data){
          $('#detail_hewan').html(data);
        }
      });
    });
  });
</script>



