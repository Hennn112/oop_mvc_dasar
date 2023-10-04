
<?php
class Pinjam extends Controller {

    public function index()
    {
        $data['page'] = 'Data Peminjaman';
        $data['pinjam'] = $this->model('PinjamModel')->getAllBuku();
        $this->view('templates/header', $data); 
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = 'Tambah Peminjaman';
        $this->view('templates/header', $data);
        $this->view('pinjam/create');
        $this->view('templates/footer');
    }

    public function simpanPinjam (){
        if( $this->model('PinjamModel')->tambahBuku($_POST) > 0) { 
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function edit ($id) {
        $data['page'] = 'Edit Peminjaman';
        $data['pinjam'] = $this->model('PinjamModel')->getBukuById($id); 
        $this->view('templates/header', $data);
        $this->view('pinjam/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePinjaman () {
        if( $this->model ('PinjamModel')->updateDataBuku($_POST) > 0) { 
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function hapus($id) {
        if( $this->model ('PinjamModel')->deleteBuku ($id) > 0) { 
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function cari()
    {
        $data['page'] = 'Data Peminjaman';
        $data['pinjam'] = $this->model('PinjamModel')->cariData();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }
}
?>