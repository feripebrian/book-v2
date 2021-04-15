    <!-- service_details_start  -->
    <div class="service_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    
                    <div class="service_details_left" style="padding: 10px; background: #fbf9ff; margin-bottom: 10px;">

                        <img src="<?php echo $this->session->userdata('logo_login'); ?>" class="img-fluid" style="width: 125px; display: block;margin-left: auto;margin-right: auto;" >
                        <p class="text-center">Login Perpustakaan E-Book</p>
                        <p class="text-center"><?php echo $this->session->userdata('nama_sekolah'); ?></p>
                        
                        <?php 
                          if ($this->session->flashdata('message')) {
                            echo '<p> '.$this->session->flashdata('message').'</p>';
                          }
                          echo validation_errors('<p>','</p>');
                        ?>
                        <?php if ($this->session->flashdata('success')) {?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                                <?php echo $this->session->flashdata('success');?>
                            </div>
                        <?php }elseif ($this->session->flashdata('failed')) {?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4>  <i class="icon fa fa-ban"></i> failed!</h4>
                                <?php echo $this->session->flashdata('failed');?>
                            </div>
                        <?php }?>
                        <?php echo form_open('log_user/user_login','class="form-contact contact_form"  novalidate="novalidate"'); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="default-select" id="default-select" name="kategori">
                                            <select name="kategori">
                                                <option value="" selected="select">Pilih Status</option>
                                                <option value="Guru">Guru</option>
                                                <option value="Siswa">Siswa</option>
                                            </select>
                                            <?php if($this->session->flashdata('kategori')){
                                                echo $this->session->flashdata('kategori');
                                            }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <?php echo form_input('id_member','','class="form-control" placeholder="Nip / Nis"');?>
                                        <?php if($this->session->flashdata('id_member')){
                                            echo $this->session->flashdata('id_member');
                                        }?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <?php echo form_password('password','','class="form-control" placeholder="Password" onfocus="this.placeholder = \'\'" onblur="this.placeholder = \'Enter Password\'" ');?>
                                        <?php if($this->session->flashdata('password')){
                                            echo $this->session->flashdata('password');
                                        }?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <?php echo form_submit('submit', 'Login','class="button button-contactForm boxed-btn"');?>
                            </div>
                        <?php echo form_close();?>
                    </div>

                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget ">
                            <h4 class="widget_title text-center">Kepala Sekolah</h4>
                                <img class="img-fluid" src="<?php echo $this->session->userdata('foto'); ?>" alt="" style="width: 200px; display: block;margin-left: auto;margin-right: auto;">
                                <p class="text-center"><?php echo $this->session->userdata('kepala_sekolah'); ?></p>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <?php $u=0; foreach($slide as $sli){ ?>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $u;?>" class="<?php if ($u == 0) {echo "active";} ?>"></li>
                                <?php $u++; }?>
                              </ol>
                              <div class="carousel-inner">
                                <?php $i=0; foreach($slide as $sli){ ?>
                                <div class="carousel-item <?php if ($i == 0) {echo "active";} ?>">
                                    <img class="d-block w-100" src="<?php echo $sli['image']?>" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $sli['name']?></h5>
                                        <?php echo $sli['description']?>
                                    </div>
                                </div>
                                <?php $i++; }?>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>                      
                        </div>
                    </div>
                    <div class="blog_details">
                        <h3>Tentang Aplikasi Perpustakaan E-Book</h3>
                        <?php echo $this->session->userdata('tentang_e_book');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_details_start  -->

   <!--  <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Koleksi Buku Baru
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                        <?php foreach($koleksi_buku as $buku){?>

                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?php echo $buku['cover']?>" alt="">
                            </div>
                            <div class="service_info">
                                <?php echo anchor('cari_buku/baca_buku/'.$buku['id_buku'],'<h3>'.$buku['judul_buku'].'</h3>');?>
                                <p><?php echo $buku['penerbit']?></p>
                            </div>
                        </div>
                        <?php }?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- contact_action_area  -->
    <div class="contact_action_area" style="background-image: url(<?php echo $this->session->userdata('background');?>);">
    </div>
    <!-- /contact_action_area  -->
    <!-- chose_area  -->
<!--     <div class="chose_area ">
        <div class="container">
            <div class="features_main_wrap">
                <div class="row  align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="about_image">
                            <img src="<?php echo $this->session->userdata('maskot');?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="features_info">
                            <h3>Tentang Aplikasi Perpustakaan E-Book</h3>
                            <?php echo $this->session->userdata('tentang_e_book');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/ chose_area  -->


