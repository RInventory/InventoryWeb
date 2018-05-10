<input type="text" name="nama" placeholder="nama">
<input type="number" name="harga" placeholder="harga">
<input type="text" name="kode" placeholder="kode">
<input type="number" name="stok" placeholder="stok">
<input type="text" name="tempat" placeholder="tempat">
<select name="kat">
  <?php foreach ($daftarkategori as $kat) { ?>
    <option value="<?php echo $kat->id_kategori;?>"><?php echo $kat->nama_kategori;?></option>
  <?php } ?>
</select>