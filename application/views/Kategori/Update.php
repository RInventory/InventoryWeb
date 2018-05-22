<!DOCTYPE html>
<html>
<head>
	<title>Demo CRUD</title>
</head>
<body>
	<h2>Demo CRUD</h2>
	<p><strong>Ubah Data</strong></p>

	<form action="create" method="post">
		<?php echo $model->label['id_kategori']; ?><br>
		<input type="text" name="id_kategori" size="10" maxlength="10" value="<?php echo $model->id_kategori; ?>" /><br><br>

		<?php echo $model->label['nama_kategori']; ?><br>
		<input type="text" name="nama_kategori" size="30" maxlength="25" value="<?php echo $model->nama_kategori; ?>"/><br><br>

		<input type="submit" name="btnSubmit" value="Simpan" />
		<input type="button" value="Batal" onclick="javascript:history.go(-1);" />
	</form>

</body>
</html>