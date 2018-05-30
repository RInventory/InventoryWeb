<?php echo form_open('Kategori/Update');
    echo form_hidden('id_kategori', $this->uri->segment(3));?>
	<?php $this->load->view($form)?>
<?php echo form_close(); ?>