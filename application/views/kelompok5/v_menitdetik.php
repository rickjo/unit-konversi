<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('_partials/head.php') ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar.php') ?>

	<div id="wrapper">

		<?php $this->load->view('_partials/sidebar.php') ?>

	    <div id="content-wrapper">
	    	<div id="container-fluid">

				<!-- Judul -->
				<h1 style="text-align: center;">Menit - Detik</h1>
				<p align="center" style="margin-top: -25px;" >=========================================</p>
				<br>
				<!-- form start -->
				<form method="POST" action="<?= 'menitdetik'; ?>">
						<table width="366" align="center" border="1">
							<tr>
								<td style="padding: 30px;text-align: center;">
									<input type="number" name="satuan"> Menit 
								</td>
							</tr>
							<tr>
								<td colspan="5" align="center"><input type="submit" name="hasil" value="Convert"></td>
							</tr>
							<tr>
								<td style="padding: 15px;text-align: center;"><?php echo (isset($_POST['satuan'])?$_POST['satuan']:''); ?> Menit = <?php echo (isset($hitung)?$hitung:''); ?> Detik</td>
							</tr>
						</table>
				</form>
				<!-- form end -->
				<br>
				<br>
			</div>
		<!-- footer bisa diisi nama & npm masing2 -->
		<p class="m-0 text-center text-black"">Irfan Farid @Copyright by : Kelompok 8</p>
		</div>
	</div>
	<?php $this->load->view('_partials/js.php') ?>
</body>
</html>
