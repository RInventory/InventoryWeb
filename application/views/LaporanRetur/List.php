<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Laporan Pereturan Barang</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Detail</th>
              <th>Stok Barang</th>
              <th>Keterangan Retur</th>
              <th>Kode Barang Retur</th>
              <th>Nama Barang</th>
              <th>Tempat Simpan</th>
              <th>Gambar</th>
              <th>Kategori</th>
              <th>Tanggal Retur</th>
              <th>Nama Supplier</th>
              <th>Nama Pegawai</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarretur as $Laporan) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $detail_retur->iddetail_retur ?></td>
              <td><?php echo $detail_retur->stok_retur ?></td>
              <td><?php echo $detail_retur->keterangan_barangretur ?></td>
              <td><?php echo $detail_retur->barang_retur_kode_retur ?></td>
              <td><?php echo $barang->nama_barang ?></td>
              <td><?php echo $barang->tmp_simpanbarang ?></td>
              <td><?php echo $barang->gambar_barang ?></td>
              <td><?php echo $barang->kategori_id_kategori ?></td>
              <td><?php echo $barang_retur->tgl_retur ?></td>
              <td><?php echo $barang_retur->supplier_id_supplier ?></td>
              <td><?php echo $barang_retur->users_id ?></td>
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>