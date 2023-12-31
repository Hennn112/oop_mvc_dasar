<div class="container">
    <h3 class="mb-3">Edit Peminjaman</h3> 
    <form action="<?= BASE_URL; ?>/pinjam/updatePinjaman" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['pinjam']['id']; ?>">
            <div class="form-group mb-3">
                <label for="nama_peminjaman">Nama Peminjaman</label>
                <input type="text" class="form-control" id="nama_peminjaman" name="nama_peminjam" value="<?= $data['pinjam']['nama_peminjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Barang</label> 
                <select class="form-select" aria-label="Default select example" name="jenis_barang" id="jenis_barang">
                    <option hidden><?= $data['pinjam']['jenis_barang'] ?></option>
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="AdaptorLAN">AdaptorLAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">Nomor Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang" value="<?= $data['pinjam']['no_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['pinjam']['tgl_pinjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_kembali">Tanggal Kembali</label>
                <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>