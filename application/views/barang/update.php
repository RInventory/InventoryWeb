<?php echo form_open('Barang/Update');
    echo form_hidden('id_barang', $this->uri->segment(3));?>
	<?php $this->load->view($form)?>
<?php echo form_close(); ?>