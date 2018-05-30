<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Edit Petugas</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Kode Barang</label>
                    <input type="number" name="kode" placeholder="kodebarang" style="color: #000;" value="<?php echo @$barang['id_barang']?>">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Nama Barang</label>
                    <input type="text" name="nama" placeholder="namabarang" style="color: #000;" value="<?php echo @$barang['nama_barang']?>">
         		</td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Harga Barang</label>
                    <input type="number" name="harga" placeholder="hargabarang" style="color: #000;" value="<?php echo @$barang['harga_barang']?>">
                </td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Stok Barang</label>
                    <input type="number" name="stok" placeholder="stokbarang" style="color: #000;" value="<?php echo @$barang['stok_barang']?>">
                </td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Tempat Menyimpan</label>
                    <input type="text" name="tempat" placeholder="tempatsimpan" style="color: #000;" value="<?php echo @$barang['tmp_simpanbarang']?>">
                </td>
         	</tr>
         	<tr>
         		<td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Kategori</label>
         			<select name="kat" style="color: #000;">
					  <?php foreach ($daftarkategori as $kat) { ?>
					    <option value="<?php echo @$kat->id_kategori;?>"><?php echo $kat->nama_kategori;?></option>
					  <?php } ?>
					</select>
         		</td>
         	</tr>
            <tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Gambar</label>
                    <input id="gambar" name="gambar" type="file" class="validate" value="<?php echo @$barang['gambar_barang']?>">
                </td>
            </tr>
        </table>
        <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>
