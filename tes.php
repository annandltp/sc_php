<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<form method="post">
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label class="control-label"> <strong>Daftar Pelanggan</strong></label>
					<div class="controls">
						<select id="kode_hewan" tabindex="5" class="form-control col-md-5" name="kode_hewan">
							<option value=""> = Pilih Daftar Pelanggan = </option>
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

				<div id="detail_pelanggan"></div>
			</div>
		</div>
	</form>
	

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$("#kode_hewan").change(function(){
			var kode_hewan = $("#kode_hewan").val();
			$.ajax({
				datatype: 'json',	
				type: 'POST',
				url : 'ajax_detail_hewan.php',
				data: 'kode_hewan='+kode_hewan,
				cache:false,
				success: function(data){
					$('#detail_pelanggan').html(data);
				}
			});
		});
	})
</script>


