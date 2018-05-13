<div class="col-md-12 graphs">
     <div class="xs">
     <h3>Pegawai</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>barang/input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
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
            <td><?php echo $d->harga_barang ?></td>
            <td><?php echo $d->stok_barang ?></td>
            <td><?php echo $d->tmp_simpanbarang ?></td>
            <!-- <td><?php echo $d->gambar_barang ?></td> -->
            <!-- <td><?php echo $d->kategori_id_barang ?></td> -->
            <td>
              <a href="" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a><a href="" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus </a>
            </td> 
          </tr>
          <?php $no++; } ?>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
  </div>
  </div>
   </div>
=======
<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Petugas</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <a href="<?php echo base_url()?>Petugas/Input" class="btn btn-xs btn-info""><span class="glyphicon glyphicon-plus"></span> Tambah </a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Kode Pegawai</th>
              <th>Nama Pegawai</th>
              <th>Alamat Pegawai</th>
              <th>No Telp</th>
              <th>Level</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarpetugas as $petugas) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $petugas->username ?></td>
              <td><?php echo $petugas->kode_pegawai ?></td>
              <td><?php echo $petugas->nama_pegawai ?></td>
              <td><?php echo $petugas->alamat_pegawai ?></td>
              <td><?php echo $petugas->notelp_pegawai ?></td>
              <td><?php echo $petugas->level_id_level ?></td>
              <!-- <td><?php echo $d->gambar_barang ?></td> -->
              <!-- <td><?php echo $d->kategori_id_barang ?></td> -->
              <td>
                <a href="<?php echo base_url("Petugas/edit/$petugas->username");?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a> 
                <a href="<?php echo base_url("Petugas/delete/$petugas->username");?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus </a>
              </td> 
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>
>>>>>>> 82196914b4cbddeb0c726ee924c4a11af9c3c0c4
