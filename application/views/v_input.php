<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>
		<div class="content">
			<center>
				<h3>Tambah Barang</h3>
			</center>
				<form action="<?php echo base_url(). 'crud/tambah_aksi' ?>" method="post">
					<table style="margin:20px auto;">
						<tr>
							<td>Kode barang</td>
							<td><input type="text" name="kode_barang"></td>
						</tr>
						<tr>
							<td>Nama Barang</td>
							<td><input type="text" name="nama_barang"></td>
						</tr>
						<tr>
							<td>Jumlah</td>
							<td><input type="text" name="jumlah_barang"></td>
						</tr>
						<tr>
							<td>Satuan Barang</td>
							<td><select id="satuan_barang" name="satuan_barang">
								<option value="kg">kg</option>
								<option value="pcs">pcs</option>
								<option value="liter">liter</option>
								<option value="meter">meter</option>
							</select></td>
						</tr>
						<tr>
							<td>Harga Beli</td>
							<td><input type="text" name="harga_beli"></td>	
						</tr>
						<tr>
							<td>Status Barang</td>
							<td><input type="radio" name="status_barang" value="Available"/>Available</td>
							<td><input type="radio" name="status_barang" value="Not-Available"/>Not-Available</td>					
						<tr>
							<td><input type="submit" value="Tambah"></td>
						</tr>
					</table>
				</form>	
			<center>
				<td><button onclick="location.href='<?php echo base_url();?>crud/index'">Batal</button></td>
			</center>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>