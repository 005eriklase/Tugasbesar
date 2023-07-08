<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>
<body>

<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>
		<div class="content">
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($barang as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update' ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Kode Barang</td>
				<td>
					<input type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
					<input type="text" name="kode_barang" value="<?php echo $u->kode_barang ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" value="<?php echo $u->nama_barang ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jumlah_barang" value="<?php echo $u->jumlah_barang ?>"></td>
			</tr>
			<tr>
				<td>Satuan Barang</td>
				<td><select id="satuan_barang" name="satuan_barang">
					<option value="kg">kg</option>
					<option value="pcs">pcs</option>
					<option value="liter">liter</option>
					<option value="meter">meter</option>
					value="<?php echo $u->satuan_barang ?>"</select></td>
			</tr>
			<td> Harga Beli</td>
				<td><input type="text" name="harga_beli" value="<?php echo $u->harga_beli ?>"></td>
			</tr>
			<tr>
				<td>Status Barang</td>
				<td><input type="radio" name="status_barang" value="Available"/>Available</td>
				<td><input type="radio" name="status_barang" value="Not-Available"/>Not-Available</td>
				value="<?php echo $u->status_barang ?>
			</tr>
			<tr>
			<tr>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<center>
				<td><button onclick="location.href='<?php echo base_url();?>crud/index'">Batal</button></td>
			</center>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
	<?php } ?>
</body>
</html>