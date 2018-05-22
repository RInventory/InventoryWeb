<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Kategori</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>Kategori/Input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Kategori</th>
              <th>Nama Kategori</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarkategori as $kategori) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $kategori->id_kategori ?></td>
              <td><?php echo $kategori->nama_kategori ?></td>
              <td>
                <a href="<?php echo base_url().'Kategori/edit/'.$kategori->id_kategori?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a> 
                <a href="<?php echo base_url().'Kategori/delete/'.$kategori->id_kategori?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus </a>
              </td> 
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>