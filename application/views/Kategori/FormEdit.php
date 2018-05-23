<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Edit Kategori</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Id Kategori</label>
                    <input type="text" name="id_kategori" placeholder="id_kategori" style="color: #000;" value="<?php echo @$kategori['id_kategori']?>">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Nama Kategori</label>
                    <input type="text" name="nama_kategori" placeholder="nama_kategori" style="color: #000;" value="<?php echo @$kategori['nama_kategori']?>">
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
