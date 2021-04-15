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