<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter </title>
</head>
<body>
	<center>
		<h3>Pakai Barang</h3>
	</center>
	<?php foreach($barang as $u){ ?>
	<form action="<?php echo base_url(). 'crud/pakai_barang' ?>" method="post">
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
                <td>Jumlah Pakai</td>
               
                <td><input type="text" name="jumlah_pakai"></td>
			</tr>
            <tr>
				<td><input type="submit" value="Pakai"></td>
			</tr>
		</table>
	</form>	

	<center>
				<td><button onclick="location.href='<?php echo base_url();?>crud/index'">Batal</button></td>
	</center>
	<?php } ?>
</body>
</html>