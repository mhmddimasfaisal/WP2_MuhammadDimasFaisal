<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Toko Sepatu</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					Tampil Data Toko Sepatu
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Nama Pembeli</th>
				<th>:</th>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<th>No Hp</th>
				<th>:</th>
				<td>
					<?= $no; ?>
				</td>
			</tr>
			<tr>
				<th>Merk Sepatu</th>
				<th>:</th>
				<td>
					<?= $merk; ?>
				</td>
			</tr>
			<tr>
				<th>Size Sepatu</th>
				<th>:</th>
				<td>
					<?= $size; ?>
				</td>
			</tr>
			<tr>
				<th>Harga</th>
				<th>:</th>
				<td>
					<?= $harga; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><br>
					<button><a href="<?= base_url('tokosepatu'); ?>">Kembali</a></button>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>