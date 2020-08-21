<?php

include "koneksi.php";

$id = isset($_POST['kode_hewan']) ? $_POST['kode_hewan'] : '';
$tampil = mysqli_query($mysqli, "select * from tbl_hewan where kode_hewan='$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<div class="control-group">
	<label class="control-label">Jenis Hewan</label>
	<div class="controls">
		<input type="text" class="form-control" name="jenis_hewan" value="<?php echo $hasil['jenis_hewan']; ?>" placeholder="NAMA HEWAN" readonly>
	</div>
</div>


