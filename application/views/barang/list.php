<div class="col-md-12 graphs">
	<div class="xs">
  	<h3>List Barang</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>Barang/Input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
      <?=form_open_multipart('Barang/insert')?>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Harga Barang</th>
              <th>Stok Barang</th>
              <th>Tempat Menyimpan</th>
              <th>Kategori</th>
              <th>Gambar</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarbarang as $d) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $d->id_barang ?></td>
              <td><?php echo $d->nama_barang ?></td>
              <td>Rp. <?php echo number_format($d->harga_barang,0,",","."); ?></td>
              <td><?php echo $d->stok_barang ?></td>
              <td><?php echo $d->tmp_simpanbarang ?></td>
              <td><?php echo $d->nama_kategori;?></td>
              <td>
                <img class="img-thumbnail" src="<?php echo base_url().$d->gambar_barang?>"/>
              </td>
              <td>
                <a href="<?php echo base_url().'Barang/edit/'.$d->id_barang?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a> 
                <a href="<?php echo base_url().'Barang/delete/'.$d->id_barang?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus </a>
              </td> 
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>