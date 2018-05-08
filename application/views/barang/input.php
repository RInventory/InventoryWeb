<div class="col-md-12 graphs">
	<div class="xs">
  	 <h3>Tambah Barang</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-pencil"></span> Tambah </a>
    <div class="row">
                        <div class="col s12">
                            <?php echo form_open('barang/insert');?>

                            <?php $this->load->view($form)?>
                            <button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</>

                            <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
  </div>
  </div>
</div>