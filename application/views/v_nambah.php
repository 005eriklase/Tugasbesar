<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter </title>
</head>
<body>
	<center>
		<h3>Tambah Barang</h3>
	</center>
	<?php foreach($barang as $u){ ?>
	<form action="<?php echo base_url(). 'crud/nambah_barang' ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Kode Barang</td>
				<input type="hidden" name="id_barang" value="<?php echo $u->id_barang ?>">
            
                <td><?php echo $u->kode_barang ?></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
             
				<td><?php echo $u->nama_barang ?></td>
			</tr>

			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jumlah_barang" readonly="true" value="<?php echo $u->jumlah_barang ?>"></td>
			</tr>
			<tr>
				<td>Satuan Barang</td>
               
                <td><?php echo $u->satuan_barang ?></td>
			<tr>
            <tr>
                <td>Jumlah Tambah</td>
               
                <td><input type="text" name="jumlah_tambah"></td>
			</tr>
            <tr>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	

	<center>
				<td><button onclick="location.href='<?php echo base_url();?>crud/index'">Batal</button></td>
	</center>
	<?php } ?>
</body>
</html>