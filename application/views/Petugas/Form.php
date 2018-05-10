<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Tambah Petugas</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
         	<tr>
         		<td>
         			<input type="text" name="username" placeholder="username">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<input type="text" name="kodepegawai" placeholder="kode pegawai">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<input type="text" name="namapegawai" placeholder="nama pegawai">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<input type="text" name="alamatpegawai" placeholder="alamat pegawai">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<input type="number" name="notelp" placeholder="no telp">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<select name="level">
					  <?php foreach ($daftarlevel as $lvl) { ?>
					    <option value="<?php echo $lvl->id_level;?>"><?php echo $lvl->nama_level;?></option>
					  <?php } ?>
					</select>
         		</td>
         	</tr>
        </table>
        <button type="submit"> SIMPAN</button>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>
<!-- <input type="text" name="username" placeholder="username"> -->
<!-- <input type="password" name="password" placeholder="password"> -->
<!-- <input type="text" name="kodepegawai" placeholder="kode pegawai">
<input type="text" name="namapegawai" placeholder="nama pegawai">
<input type="text" name="alamatpegawai" placeholder="alamat pegawai">
<input type="number" name="notelp" placeholder="no telp">
<select name="level">
  <?php foreach ($daftarlevel as $lvl) { ?>
    <option value="<?php echo $lvl->id_level;?>"><?php echo $lvl->nama_level;?></option>
  <?php } ?>
</select> -->