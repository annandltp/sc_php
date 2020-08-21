<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM TAMBAH OBAT</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="proses_tambah_obat.php" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NAMA OBAT</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama_obat" placeholder="NAMA OBAT" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">HARGA</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="harga" placeholder="HARGA" required>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">TAMBAH</button>

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
    NAMA OBAT DIISI DENGAN TEKS.  
    JENIS BARANG PILIH MAKANAN ATAU MINUMAN
    DAN UNTUK HARGA MODAL, HARGA JUAL DAN STOK DIISI DENGAN ANGKA
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>