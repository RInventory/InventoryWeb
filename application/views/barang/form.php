<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Tambah Barang</h3>

    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Kode Barang</label>
                    <input type="text" name="kode" placeholder="kodebarang" style="color: #000;">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Nama Barang</label>
                    <input type="text" name="nama" placeholder="namabarang" style="color: #000;">
         		</td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Harga Barang</label>
                    <input type="number" name="harga" placeholder="hargabarang" style="color: #000;">
                </td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Stok Barang</label>
                    <input type="number" name="stok" placeholder="stokbarang" style="color: #000;">
                </td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Tempat Menyimpan</label>
                    <input type="text" name="tempat" placeholder="tempatsimpan" style="color: #000;">
                </td>
         	</tr>
         	<tr>
         		<td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Kategori</label>
         			<select name="kat" style="color: #000;">
					  <?php foreach ($daftarkategori as $kat) { ?>
					    <option value="<?php echo $kat->id_kategori;?>"><?php echo $kat->nama_kategori;?></option>
					  <?php } ?>
					</select>
         		</td>
         	</tr>
            <tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Gambar</label>
                    <input id="gambar" name="gambar" type="file" class="validate">
                </td>
            </tr>
        </table>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-default">Kembali</button>
        </div>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>