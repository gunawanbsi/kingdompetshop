<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('footer');
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/userheader', $data);
            $this->load->view('user/ubahprofile', $data);
            $this->load->view('footer');
            }
            else {
                $nama = $this->input->post('nama', true);
                $email = $this->input->post('email', true);
                //jika ada gambar yang akan diupload
                $upload_image = $_FILES['image']['name'];

                if ($upload_image) {
                    $config['upload_path'] = './assets/img/profile/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '300000';
                    $config['max_width'] = '10024';
                    $config['max_height'] = '10000';
                    $config['file_name'] = 'pro' . time();
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {$gambar_lama = $data['user']['image'];
                        if ($gambar_lama != 'default.jpg') {unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                        }       
                        $gambar_baru = $this->upload->data('file_name');
                        $this->db->set('image', $gambar_baru);
                    } 
                    else { }
                }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Profil Anda Berhasil di Ubah.
            </div>');
            redirect('user');
        }
    }

    public function home(){
        $data['judul'] = "Home";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('user/userhome', $data);
        $this->load->view('footer', $data);
    }

    public function pet(){
        $data['judul'] = "Daftar Hewan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('pet/pet', $data);
        $this->load->view('footer', $data);
    }

    public function produk(){
        $data['judul'] = "Kategori Produk";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('footer', $data);
    }

    public function galeri(){
        $data['judul'] = "Galeri Foto";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('tentangkami/galeri', $data);
        $this->load->view('footer', $data);
    }

    public function team(){
        $data['judul'] = "Team Kami";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('tentangkami/tim', $data);
        $this->load->view('footer', $data);
    }

    public function kontak(){
        $data['judul'] = "Hubungi Kami";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('kontak', $data);
        $this->load->view('footer', $data);
    }

    public function dataCat(){
        $data['judul'] = "Data Hewan Kucing";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewanWhere(['kategori_hewan' => ('Kucing')])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('pet/datacat', $data);
        $this->load->view('footer', $data);
    }

    public function dataDog(){
        $data['judul'] = "Data Hewan Anjing";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->ModelHewan->getHewanWhere(['kategori_hewan' => ('Anjing')])->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('pet/datadog', $data);
        $this->load->view('footer', $data);
    }

    public function adopsi(){
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat! Anda sudah terdaftar menjadi Adopter! Silahkan Kunjungi Toko Kami untuk penyelesaian berkas.
        </div>');
        redirect('user/pet');
    }

    public function catFood(){
        $data['judul'] = "Makanan Kucing";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelProduk->dataCatfood()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/catfood', $data);
        $this->load->view('footer', $data);
    }

    public function dogFood(){
        $data['judul'] = "Makanan Anjing";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelProduk->dataDogfood()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/dogfood', $data);
        $this->load->view('footer', $data);
    }

    public function treats(){
        $data['judul'] = "Treats Hewan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelProduk->dataTreats()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/treats', $data);
        $this->load->view('footer', $data);
    }

    public function aksesoris(){
        $data['judul'] = "Makanan Kucing";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelProduk->dataAksesoris()->result();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/aksesoris', $data);
        $this->load->view('footer', $data);
    }

    public function keranjang($id){
        $produk = $this->ModelProduk->find($id);
        $data = array(
            'id' => $produk->id,
            'qty' => 1,
            'price' => $produk->harga,
            'name' => $produk->produk
        );
        $this->cart->insert($data);
        redirect('user/produk');
    }

    public function detailKeranjang(){
        $data['judul'] = "Keranjang";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/keranjang', $data);
        $this->load->view('footer', $data);
    }

    public function hapusKeranjang(){
        $this->cart->destroy();
        redirect('user/produk');
    }

    public function pembayaran(){
        $data['judul'] = "Pembayaran";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userheader', $data);
        $this->load->view('produk/pembayaran', $data);
        $this->load->view('footer', $data);
    }

    public function proses(){
        $data['judul'] = "Proses Pemesanan";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $is_processed = $this->ModelFaktur->index();
        if($is_processed){
            $this->cart->destroy();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" align="center" role="alert">Selamat! Pesanan Anda berhasil di proses!.</div>');
            redirect('user/produk');
        }
        else{
            echo "Maaf, Pesanan Anda Gagal di Proses. Silahkan Coba Lagi Ya!!";
        }
    }
}