<?php
$this->session->userdata('id');
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $row    = $this->db->query("SELECT * FROM tb_home")->row();
    $data = array(
        'tittle'      => $row->tittle, 
        'nama_sekolah'      => $row->nama_sekolah, 
        'kepala_sekolah'    => $row->kepala_sekolah, 
        'title'             => $row->tittle, 
        'logo'              => $row->logo,
        'logo_login'        => $row->logo_login,
        'foto'              => $row->foto,
        'banner'            => $row->banner,
        'selogan'           => $row->selogan,
        'background'        => $row->background,
        'maskot'            => $row->maskot,
        'tentang_e_book'    => $row->tentang_e_book,
        'meta'              => $row->meta,
        'descriptions'      => $row->descriptions,
    );
    $this->session->set_userdata($data);
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $this->session->userdata('tittle'); ?></title>
    <meta name="description" content="<?php echo $this->session->userdata('descriptions'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css"> -->

    <!-- DATA TABLES -->
    <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="bradcam_area" style="background-image: url(<?php echo $this->session->userdata('background');?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                             <div class="bradcam_text text-center">
                                <p>Perpustakaan E-Book</p>
                                <h3><?php echo $this->session->userdata('selogan');?></h3>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="<?php echo $this->session->userdata('logo'); ?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><?php echo anchor('cari_buku','Cari Buku');?></li>
                                            <li><a href="#">Kategori <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <?php foreach($kategori as $kategori_menu){?>
                                                    <li><?php echo anchor('kategori/'.$kategori_menu['kategori'],$kategori_menu['kategori']);?></li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                            
                                            <li><?php echo anchor('saran_buku','Saran Buku');?></li>
                                            <li><a href="#">Video Edukasi<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <?php foreach($kategori_video as $kv){ ?>
                                                    <li><?php echo anchor('kategori_video/'.$kv['slug'],$kv['kategori']);?></li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                            <li><?php echo anchor('galeri','Galeri');?></li>
                                            <li><?php echo anchor('logout','<i class="ti-power-off"></i> Sign out');?></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->