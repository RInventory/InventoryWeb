<div class="col-md-12 graphs">
  <div class="xs">
    <h3>Laporan Pemasukan Barang</h3>
    <div class="bs-example4" data-example-id="simple-responsive-table">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Detail</th>
              <th>Jumlah Barang</th>
              <th>Kode Barang Masuk</th>
              <th>Nama Barang</th>
              <th>Tempat Simpan</th>
              <th>Gambar</th>
              <th>Kategori</th>
              <th>Tanggal Masuk</th>
              <th>Keterangan</th>
              <th>Nama Supplier</th>
              <th>Nama Pegawai</th>
            </tr>
          </thead>
          <tbody> 
            <?php $no = 1; 
            foreach ($daftarmasuk as $Laporan) { ?>
              <div style="background-color: #0B2161; color: #000000">
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $detail_masuk->iddetail_masuk ?></td>
                  <td><?php echo $detail_masuk->stok_masuk ?></td>
                  <td><?php echo $detail_masuk->barang_masuk_kode_masuk ?></td>
                  <td><?php echo $barang->nama_barang ?></td>
                  <td><?php echo $barang->tmp_simpanbarang ?></td>
                  <td><?php echo $barang->gambar_barang ?></td>
                  <td><?php echo $barang->kategori_id_kategori ?></td>
                  <td><?php echo $barang_masuk->tgl_masuk ?></td>
                  <td><?php echo $barang_masuk->supplier_id_supplier ?></td>
                  <td><?php echo $barang_masuk->keterangan_masuk ?></td>
                  <td><?php echo $barang_masuk->users_id ?></td>
                </tr>
              </div>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div><!-- /.table-responsive -->
    </div>
  </div>
</div>