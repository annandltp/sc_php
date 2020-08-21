<?php

include "koneksi.php";
$no = 1;
$id = $_GET['id'];
$tampil = mysqli_query($mysqli, "SELECT tbl_dokter.*, tbl_obat.harga as harga_obat, tbl_hewan.*, tbl_obat.*, tbl_pemeriksaan.* from tbl_pemeriksaan 
	inner join tbl_dokter on tbl_pemeriksaan.kode_dokter=tbl_dokter.kode_dokter
	inner join tbl_hewan on tbl_pemeriksaan.kode_hewan=tbl_hewan.kode_hewan
	inner join tbl_obat on tbl_pemeriksaan.kode_obat=tbl_obat.kode_obat where kode_pemeriksaan='$id' order by kode_pemeriksaan='$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<section id="header-kop">
	<div class="container-fluid">
		<table class="table table-borderless">
			<tbody>
				<tr>
					
					<td class="text-center" width="100%">
						<b>Klinik Hewan Mantap Jiwa</b> <br>
						Bekasi<br>
						Telp: (021) 192819189<br>
					
						</td>
					</tr>
				</tbody>
			</table>
			<hr class="line-top" />
		</div>
	</section>

	<section id="body-of-report">
		<div class="container">
			<h4 class="text-center">Detail Transaksi</h4>
			<br />
			<table width="100%">
				<tr>
					<td width="18%"><b>ID. Transaksi</b></td>
					<td width="1%"><b>:</b></td>
					<td width="20%"><?php echo $hasil['kode_pemeriksaan'];?></td>
					<td width="18%"><b>Nama Dokter</b></td>
					<td width="1%"><b>:</b></td>
					<td width="20%"><?php echo $hasil['nama_dokter'];?></td>
				</tr>
				<tr>
					<td width="9%"><b>Tanggal/Jam</b></td>
					<td width="2%"><b>:</b></td>
					<td width="40%"><?php echo $hasil['tanggal'];?></td>
				</tr>
				<tr>
					<td width="9%"><b>Pemilik</b></td>
					<td width="2%"><b>:</b></td>
					<td width="40%"><?php echo $hasil['nama_pemilik'];?></td>
				</tr>
				<tr>
					<td width="9%"><b>Nama Hewan</b></td>
					<td width="2%"><b>:</b></td>
					<td width="40%"><?php echo $hasil['nama_hewan'];?></td>
				</tr>
			</table>
		</br>
		<table class="table table-bordered table-keuangan">
			<thead>
				<tr>
					<th width="1%">No</th>
					<th width="10%">Nama Dokter</th>
					<th width="10%">Nama Obat</th>
					<th width="20%">Harga Obat</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $hasil['nama_dokter'];?></td>
					<td><?php echo $hasil['nama_obat'];?></td>
					<td><?php echo "Rp ".number_format($hasil['harga_obat']); ?></td>
					
				</tr>

			</tbody>
			<tfoot>
				<tr>
					
					<th class="text-right" colspan="3">Total :</th>
					<th class="text-left"><?php echo "Rp ".number_format($hasil['harga']); ?></th>
				</tr>
			</tfoot>
		</table>
		<br />
	</div><!-- /.container -->
</section>

<script type="text/javascript">
	$(document).ready(function() {
		window.print();
	});
</script>
