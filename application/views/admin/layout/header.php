<?php
$ci = get_instance();
$ci->load->helper('Global_helper');
$ci->load->model('konten_model');
$id_user = ucfirst($this->session->userdata('id'));
$_access = $ci->konten_model->get_user_access($id_user);
$_template = '<li><a href="{URL}" class="{CLASS_ON}"> {TITLE}</a></li>';
?>
  <body class="skin-blue">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo"><b>Administrator</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo $this->session->userdata('foto'); ?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo ucfirst($this->session->userdata('username')); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo $this->session->userdata('foto'); ?> " class="img-circle" alt="User Image" />
                    <p>
                      <?php echo ucfirst($this->session->userdata('username')); ?> 
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <?php echo anchor('admin/login/logout','Sign out','class="btn btn-default btn-flat"')?>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo ucfirst($this->session->userdata('nama')); ?></p>

            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
            <?php
            $profile_sekolah = '';
            $profile_sekolah .= access_menu('dasbor/profile_sekolah','Profile Sekolah',$_access,$_template,TRUE);
            if( ! empty($profile_sekolah) ){ ?>

              <?php echo $profile_sekolah?>
            <?php } ?>

            <?php
            $visi_dan_misi = '';
            $visi_dan_misi .= access_menu('dasbor/visi_dan_misi','Visi dan Misi',$_access,$_template,TRUE);
            if( ! empty($visi_dan_misi) ){ ?>

              <?php echo $visi_dan_misi?>
            <?php } ?>

            <?php
            $slide = '';
            $slide .= access_menu('dasbor/slide','Slide',$_access,$_template,TRUE);
            if( ! empty($slide) ){ ?>

              <?php echo $slide?>
            <?php } ?>

            <?php
            $kategori = '';
            $kategori .= access_menu('dasbor/kategori','Kategori Buku',$_access,$_template,TRUE);
            if( ! empty($kategori) ){ ?>

              <?php echo $kategori?>
            <?php } ?>

            <?php
            $buku = '';
            $buku .= access_menu('dasbor/buku','Buku',$_access,$_template,TRUE);
            if( ! empty($buku) ){ ?>

              <?php echo $buku?>
            <?php } ?>

            <?php
            $saran_buku = '';
            $saran_buku .= access_menu('dasbor/saran_buku','Saran Buku',$_access,$_template,TRUE);
            if( ! empty($saran_buku) ){ ?>

              <?php echo $saran_buku?>
            <?php } ?>

            <?php
            $kategori_video = '';
            $kategori_video .= access_menu('dasbor/kategori_video','Kategori Video',$_access,$_template,TRUE);
            if( ! empty($kategori_video) ){ ?>

              <?php echo $kategori_video?>
            <?php } ?> 

            <?php
            $video_edukasi = '';
            $video_edukasi .= access_menu('dasbor/video_edukasi','Video Edukasi',$_access,$_template,TRUE);
            if( ! empty($video_edukasi) ){ ?>

              <?php echo $video_edukasi?>
            <?php } ?>

            <?php
            $galeri = '';
            $galeri .= access_menu('dasbor/galeri','Galeri',$_access,$_template,TRUE);
            if( ! empty($galeri) ){ ?>

              <?php echo $galeri?>
            <?php } ?>

            <li class="header">PENGATURAN</li>
            <?php
            $pengaturan = '';
            $pengaturan .= access_menu('dasbor/pengaturan','Pengaturan',$_access,$_template,TRUE);
            if( ! empty($pengaturan) ){ ?>

              <?php echo $pengaturan?>
            <?php } ?>
            
            <?php
            $member = '';
            $member .= access_menu('dasbor/member','Member',$_access,$_template,TRUE);
            if( ! empty($member) ){ ?>

              <?php echo $member?>
            <?php } ?>

            <?php
            $user = '';
            $user .= access_menu('dasbor/user','User',$_access,$_template,TRUE);
            if( ! empty($user) ){ ?>

              <?php echo $user?>
            <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>