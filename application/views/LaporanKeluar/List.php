<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Laporan Pengeluaran Barang</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Detail</th>
              <th>Stok Barang</th>
              <th>Kode Barang Masuk</th>
              <th>Nama Barang</th>
              <th>Tempat Simpan</th>
              <th>Gambar</th>
              <th>Kategori</th>
              <th>Tanggal Masuk</th>
              <th>Keterangan</th>
              <th>Nama Pegawai</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarkeluar as $LaporanKeluar) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $detail_keluar->iddetail_keluar ?></td>
              <td><?php echo $detail_keluar->stok_keluar ?></td>
              <td><?php echo $detail_keluar->barang_keluar_kode_keluar ?></td>
              <td><?php echo $barang->nama_barang ?></td>
              <td><?php echo $barang->tmp_simpanbarang ?></td>
              <td><?php echo $barang->gambar_barang ?></td>
              <td><?php echo $barang->kategori_id_kategori ?></td>
              <td><?php echo $barang_keluar->tgl_keluar ?></td>
              <td><?php echo $barang_keluar->keterangan_keluar ?></td>
              <td><?php echo $barang_keluar->users_id ?></td>
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>