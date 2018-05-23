<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Edit Supplier</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Id Supplier</label>
                    <input type="text" name="idsupplier" placeholder="idsupplier" style="color: #000;" value="<?php echo @$supplier['id_supplier']?>">
         		</td>
         	</tr>
         	<tr>
         		<td>
         			<label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Nama Supplier</label>
                    <input type="text" name="namasupplier" placeholder="namasupplier" style="color: #000;" value="<?php echo @$supplier['nama_supplier']?>">
         		</td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">Alamat Supplier</label>
                    <input type="text" name="alamatsupplier" placeholder="alamatsupplier" style="color: #000;" value="<?php echo @$supplier['alamat_supplier']?>">
                </td>
         	</tr>
         	<tr>
                <td>
                    <label class="control-label col-lg-3" style="color: #000000; font-size: medium;">No Telp Supplier</label>
                    <input type="number" name="notelp" placeholder="notelp" style="color: #000;" value="<?php echo @$supplier['notelp_supplier']?>">
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
