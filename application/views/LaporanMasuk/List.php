<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Laporan Pemasukan</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Detail</th>
              <th>Stok Barang</th>
              <th>ID Barang</th>
              <th>Kode Barang Masuk</th>
              <th>Nama Barang</th>
              <th>Tempat Simpan</th>
              <th>Gambar</th>
              <th>Kategori</th>
              <th>Tanggal Masuk</th>
              <th>Keterangan</th>
              <th>ID Supplier</th>
              <th>Nama Pegawai</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarlaporanmasuk as $LaporanMasuk) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $detail_masuk->iddetail_masuk ?></td>
              <td><?php echo $detail_masuk->stok_masuk ?></td>
              <td><?php echo $detail_masuk->barang_id_barang ?></td>
              <td><?php echo $detail_masuk->barang_masuk_kode_masuk ?></td>
              <td><?php echo $barang->nama_barang ?></td>
              <td><?php echo $barang->tmp_simpanbarang ?></td>
              <td><?php echo $barang->gambar_barang ?></td>
              <td><?php echo $barang->kategori_id_kategori ?></td>
              <td><?php echo $barang_masuk->tgl_masuk ?></td>
              <td><?php echo $barang_masuk->supplier_id_supplier ?></td>
              <td><?php echo $barang_masuk->users_id ?></td>
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>