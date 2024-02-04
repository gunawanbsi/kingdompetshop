<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pet Shop | <?php echo $judul; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url()?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="<?php echo base_url().'pengunjung'?>" class="navbar-brand d-flex align-items-center">
            <img class="img-nav" src="<?php echo base_url()?>assets/img/logo.png">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url().'pengunjung'?>" class="nav-item nav-link">Beranda</a>
                <a href="<?php echo base_url().'pengunjung/pet'?>" class="nav-item nav-link">Pet</a>
                <a href="<?php echo base_url().'pengunjung/produk'?>" class="nav-item nav-link">Produk</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo base_url().'pengunjung/galeri'?>" class="dropdown-item">Galeri Foto</a>
                        <a href="<?php echo base_url().'pengunjung/team'?>" class="dropdown-item">Team Kami</a>
                    </div>
                </div>
                <a href="<?php echo base_url().'pengunjung/kontak'?>" class="nav-item nav-link">Kontak</a>
                <a href="<?php echo base_url().'auth'?>" class="nav-item nav-link"><i class="fa fa-users"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->