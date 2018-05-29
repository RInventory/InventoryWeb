<div class="col-md-12 graphs">
	<div class="xs">
  	<h3>Laporan Barang Retur</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>Barang/Input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
      <?=form_open_multipart('Barang/insert')?>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Id Detail Retur</th>
              <th>Stok Retur</th>
              <th>Id Barang</th>
              <th>Kode Retur</th>
              <!-- <th>Nama Supplier</th>
              <th>Gambar</th> -->
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarretur as $bm) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $bm->iddetail_retur ?></td>
              <td><?php echo $bm->stok_retur ?></td>
              <td><?php echo $bm->barang_id_retur ?></td>
              <td><?php echo $bm->barang_retur_kode_retur ?></td>
              <!-- <td><?php echo $bm->nama_kategori;?></td>
              <td>
                <img class="img-thumbnail" src="<?php echo base_url().$d->gambar_barang?>"/>
              </td> -->
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