<div class="container">
    <h3 class="mb-3">Tambah Buku</h3>
    <form action="<?= BASE_URL; ?>/pinjam/simpanPinjam" method="post">
        <div class="class-body">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" autocomplete="off" required>
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Barang</label>
                <select class="form-select" aria-label="Default select example" name="jenis_barang" id="jenis_barang">
                    <option hidden>Pilih</option>
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="AdaptorLAN">AdaptorLAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">Nomor Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang" autocomplete="off" required>
            </div>
            <div class="form-group mb-3">
                <label for="no_barang">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="no_barang" name="tgl_pinjam" autocomplete="off" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>