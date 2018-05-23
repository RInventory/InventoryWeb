<?php echo form_open('Supplier/Update');
    echo form_hidden('id_supplier', $this->uri->segment(3));?>
	<?php $this->load->view($form)?>
<?php echo form_close(); ?>