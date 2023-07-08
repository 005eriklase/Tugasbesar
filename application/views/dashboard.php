<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<center><h1>Sistem Informasi Inventory Barang </h1></center>
			<table style="margin:20px auto;" border="1">
				<tr>
					<th>Id Barang</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Jumlah Barang</th>
					<th>Satuan Barang</th>
					<th>Harga Beli</th>
					<th>Status Barang</th>
					<th>Pilihan</th>
				</tr>
				
				<?php 
				$no = 1;
				foreach($barang as $u){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->kode_barang ?></td>
					<td><?php echo $u->nama_barang ?></td>
					<td><?php echo $u->jumlah_barang ?></td>
					<td><?php echo $u->satuan_barang ?></td>
					<td><?php echo $u->harga_beli ?></td>
					<td><?php echo $u->status_barang ?></td>
					<td>
			      		<?php echo anchor('crud/edit/'.$u->id_barang,'Update'); ?>
                  		<?php echo anchor('crud/hapus/'.$u->id_barang,'Hapus'); ?>
				  		<?php echo anchor('crud/nambah/'.$u->id_barang,'Tambah'); ?>
				  		<?php echo anchor('crud/pakai/'.$u->id_barang,'Pakai'); ?>
					</td>
				</tr>
				<?php } ?>
			</table>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>