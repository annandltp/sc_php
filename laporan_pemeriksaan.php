<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    
    <script src="bootstrap-datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="datepicker.css">
    //Load CSS Bootstrap dari MaxCDN

    //Load Jquery dari jquery.com

</head>
<body>
    <div class="container">
        <br>
        <h4>Pencarian Data Berdasarkan Tanggal</h4>

        <form action="index.php?p=laporan_pemeriksaan" method="post">

            <div class="form-group">
                <label>Tanggal Awal</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <input id="tgl_mulai" placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal"  value="<?php if (isset($_POST['tgl_awal'])) echo $_POST['tgl_awal'];?>" >
                </div>
            </div>
            <div class="form-group">
                <label>Tanggal Akhir</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <input id="tgl_akhir" placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir" value="<?php if (isset($_POST['tgl_akhir'])) echo $_POST['tgl_akhir'];?>">
                </div>
            </div>

            <script type="text/javascript">
                $(function(){
                    $(".datepicker").datepicker({
                        format: 'dd-mm-yyyy',
                        autoclose: true,
                        todayHighlight: false,
                    });
                    $("#tgl_mulai").on('changeDate', function(selected) {
                        var startDate = new Date(selected.date.valueOf());
                        $("#tgl_akhir").datepicker('setStartDate', startDate);
                        if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
                            $("#tgl_akhir").val($("#tgl_mulai").val());
                        }
                    });
                });
            </script>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Cari">
            </div>
        </form>

        <table class="table table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Hewan</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Dokter</th>
                    <th>Nama Obat</th>
                    <th>Sakit</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <?php

            include "koneksi.php";
            if (isset($_POST['tgl_awal'])&& isset($_POST['tgl_akhir'])) {

                $tgl_awal=date('Y-m-d', strtotime($_POST["tgl_awal"]));
                $tgl_akhir=date('Y-m-d', strtotime($_POST["tgl_akhir"]));


                $sql="SELECT tbl_dokter.*, tbl_hewan.*, tbl_obat.*, tbl_pemeriksaan.* from tbl_pemeriksaan 
            inner join tbl_dokter on tbl_pemeriksaan.kode_dokter=tbl_dokter.kode_dokter
            inner join tbl_hewan on tbl_pemeriksaan.kode_hewan=tbl_hewan.kode_hewan
            inner join tbl_obat on tbl_pemeriksaan.kode_obat=tbl_obat.kode_obat where tanggal between '".$tgl_awal."' and '".$tgl_akhir."' order by kode_pemeriksaan asc";

            }else {
                $sql="SELECT tbl_dokter.*, tbl_hewan.*, tbl_obat.*, tbl_pemeriksaan.* from tbl_pemeriksaan 
            inner join tbl_dokter on tbl_pemeriksaan.kode_dokter=tbl_dokter.kode_dokter
            inner join tbl_hewan on tbl_pemeriksaan.kode_hewan=tbl_hewan.kode_hewan
            inner join tbl_obat on tbl_pemeriksaan.kode_obat=tbl_obat.kode_obat order by kode_pemeriksaan asc";
            }

            $hasil=mysqli_query($mysqli,$sql);
            $no=0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo date('d-m-Y', strtotime($data["tanggal"]));   ?></td>
                        <td><?php echo $data["nama_hewan"];?></td>
                        <td><?php echo $data["nama_pemilik"];?></td>
                        <td><?php echo $data["nama_dokter"];?></td>
                        <td><?php echo $data["nama_obat"];?></td>
                        <td><?php echo $data["sakit"];?></td>
                        <td><?php echo $data["harga"];?></td>
                    </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>