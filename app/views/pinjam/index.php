<div class="container">
    <h3 class="mb-3">Daftar Peminjaman</h3>
    <br>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">

                <a href="<?= BASE_URL; ?>/pinjam/tambah" class="btn btn-primary">Tambah Buku</a>
                <form class="d-flex" style="margin-left: 785px;" role="search" action="<?= BASE_URL; ?>/pinjam/cari" method="post">
                    <input class="form-control me-2" type="search" name="keyword" autocomplete="off" placeholder="Search" required aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <form class="d-flef" role="search" action="<?= BASE_URL; ?>/pinjam/index" method="post">
                    <button class="btn btn-outline-danger" type="submit">Reset</button>
                </form>
            </div>
        </nav>
    <table class="table table-white table-striped table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Nomor Barang</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; 
                  date_default_timezone_set('Asia/Jakarta');
                  $date = date('Y-m-d H:i:s');
            ?>
            <?php foreach ($data['pinjam'] as $row) :?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam']; ?></td>
                    <td><?= $row['jenis_barang']; ?></td>
                    <td><?= $row['no_barang']; ?></td>
                    <td><?= $row['tgl_pinjam']; ?></td>
                    <td><?= $row['tgl_kembali']; ?></td>
                    <td><?php if ($row['tgl_pinjam'] == $row['tgl_kembali'] || $row['tgl_pinjam'] > $row['tgl_kembali'] || $date >= $row['tgl_kembali'] ):?>
                            <h5><span class="badge bg-success">Sudah Kembali</span></h5>
                            <?php $cek = true ?>
                        <?php else:?>
                            <h5><span class="badge bg-danger">Belum Kembali</span></h5>
                            <?php $cek = false ?>
                        <?php endif;?>
                    </td>
                    <td><?php if($cek == true) :?>
                            <a href="<?= BASE_URL ?>/pinjam/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');
                            ">Hapus</a>
                        <?php else:?>
                            <a href="<?= BASE_URL ?>/pinjam/edit/<?= $row['id']?>" class="btn btn-primary">Edit</a>
                            <a href="<?= BASE_URL ?>/pinjam/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');
                            ">Hapus</a>
                        <?php endif;?>
                    </td>
                </tr>
            <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>
