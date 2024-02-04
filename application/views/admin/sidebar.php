<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'admin'?>">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fas fa-cat"></i>
</div>
<div class="sidebar-brand-text mx-3">Kingdom Pet Shop</div>
</a>
<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- Looping Menu-->
 
<!-- Heading -->
<div class="sidebar-heading">
Master Data
</div>
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url().'admin' ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
<!-- Divider -->
<hr class="sidebar-divider mt-3">

<li class="nav-item active">
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('admin/user'); ?>">
<i class="fas fa-users"></i>
<span>Data User</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item">
<a class="nav-link pb-0" href="<?=base_url('admin/hewan'); ?>">
<i class="fas fa-dog"></i>
<span>Data Hewan</span></a>
</li>
</li>
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Penjualan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url().'admin/produk' ?>">Produk</a>
                        <a class="collapse-item" href="<?php echo base_url().'admin/faktur' ?>">Faktur</a>
                    </div>
                </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider mt-3">
<div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
</div>
</ul>
<!-- End of Sidebar -- > 