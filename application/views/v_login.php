<!DOCTYPE html>
<html>
<head>
	<title>Tugas Besar 2</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login2.css') ?>" />
</head>
<body>
	<div class="container">
		<h1>Selamat Datang</h1>
			<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Login"></td>
					</tr>
				</table>
			</form>
</body>
</html>