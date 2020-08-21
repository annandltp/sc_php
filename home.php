<?php
    session_start();
?>
<div class="row">
        
        <div class="box box-info">
        <div class="box-header with-border">

        </div>
        <h1 align="center">
            Hai <?php echo $_SESSION['username'];?> Selamat Datang Di Project 4.4.
        </h1>
        <div class="box-footer">
        </div>
    </div>
<?php 
include "koneksi.php";
if($_SESSION){ ?>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-th-large"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">JUMLAH BARANG</span>
              <span class="info-box-number">
              <?php
                $tampil = mysqli_query($mysqli, "select sum(stock) as jumlah from barang");
                $hasil = mysqli_fetch_array($tampil);
                echo $hasil = $hasil['jumlah'];
              ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">BARANG MASUK</span>
              <span class="info-box-number">
              
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">BARANG KELUAR</span>
              <span class="info-box-number">
              <?php
                $tampil = mysqli_query($mysqli, "select sum(jumlah) as jumlah from jualsatuan");
                $hasil = mysqli_fetch_array($tampil);
                echo $hasil = $hasil['jumlah'];
              ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-dollar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL</span>
              <span class="info-box-number">
              <?php
                $tampil = mysqli_query($mysqli, "select sum(totaljual) as jumlah from jualsatuan");
                $hasil = mysqli_fetch_array($tampil);
                echo $hasil = "Rp. ".number_format($hasil['jumlah']);
              ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
<?php }else{}?>
</div>