<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Supplier</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>Supplier/Input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Id Supplier</th>
              <th>Nama Suppiler</th>
              <th>Alamat Supplier</th>
              <th>No Telp</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarsupplier as $sup) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $sup->id_supplier ?></td>
              <td><?php echo $sup->nama_supplier ?></td>
              <td><?php echo $sup->alamat_supplier ?></td>
              <td><?php echo $sup->notelp_supplier ?></td>
              <td>
                <a href="<?php echo base_url().'Supplier/edit/'.$sup->id_supplier?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a> 
                <a href="<?php echo base_url().'Supplier/delete/'.$sup->id_supplier?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus </a>
              </td> 
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>
