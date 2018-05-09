<div class="col-md-12 graphs">
	<div class="xs">
  	 <h3>Tambah Barang</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="row">
        <div class="col s12">
            <?php echo form_open('Barang/insert');?>

            <?php $this->load->view($form)?>
                <button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</>

                <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
            <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>