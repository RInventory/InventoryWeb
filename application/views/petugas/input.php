<!DOCTYPE html>
<html>
<head>
	<title>Demo CRUD</title>
</head>
<body>
	<h2>Demo CRUD</h2>
	<p><strong>Tambah Data</strong></p>

	<form action="create" method="post">
		<?php echo $model->label['kode']; ?><br>
		<input type="text" name="kode" size="10" maxlength="10"/><br><br>

		<?php echo $model->label['nama']; ?><br>
		<input type="text" name="nama" size="30" maxlength="25"/><br><br>

		<?php echo $model->label['harga']; ?><br>
		<textarea name="harga"></textarea><br><br>

		<?php echo $model->label['stok']; ?><br>
		<textarea name="stok"></textarea><br><br>

		<input type="submit" name="btnSubmit" value="Simpan" />
		<input type="button" value="Batal" onclick="javascript:history.go(-1);" />
	</form>
</body>
</html>