<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Pengunjung extends CI_Controller{

    function __construct(){
        parent :: __construct();
    }

    public function index(){
        $data['judul'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer', $data);
    }

    public function pet(){
        $data['judul'] = "Daftar Hewan";
        $this->load->view('header', $data);
        $this->load->view('pet/pet', $data);
        $this->load->view('footer', $data);
    }

    public function produk(){
        $data['judul'] = "Kategori Produk";
        $data['produk'] = $this->ModelProduk->getProduk()->result();
        $this->load->view('header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('footer', $data);
    }

    public function galeri(){
        $data['judul'] = "Galeri Foto";
        $this->load->view('header', $data);
        $this->load->view('tentangkami/galeri', $data);
        $this->load->view('footer', $data);
    }

    public function team(){
        $data['judul'] = "Team Kami";
        $this->load->view('header', $data);
        $this->load->view('tentangkami/tim', $data);
        $this->load->view('footer', $data);
    }

    public function kontak(){
        $data['judul'] = "Hubungi Kami";
        $this->load->view('header', $data);
        $this->load->view('kontak', $data);
        $this->load->view('footer', $data);
    }
}