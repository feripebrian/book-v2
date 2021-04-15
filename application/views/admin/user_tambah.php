Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <?php if ($this->session->flashdata('success')) {?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <h4>  <i class="icon fa fa-check"></i> Success!</h4>
                      <?php echo $this->session->flashdata('success');?>
                    </div>
                  <?php }elseif ($this->session->flashdata('failed')) {?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> failed!</h4>
                      <?php echo $this->session->flashdata('failed');?>
                    </div>
                  <?php }?>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <?php echo validation_errors(); ?>
                  <?php echo form_open('admin/dasbor/user_add');?>

                    <div class="box-body">
                      <div class="form-group">
                        <label>Username</label>
                        <?php echo form_input('username','','class="form-control" placeholder="Username" required');?>
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <?php echo form_input('nama','','class="form-control" placeholder="Nama" required');?>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="" class="form-control" placeholder="Email" required >
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <?php echo form_password('password','','class="form-control" placeholder="Password" required');?>
                      </div>
                      <div class="form-group">
                        <label>Foto</label>
                      <div class="input-group input-group-sm">
                        <input type="text" id="as" name="foto" class="form-control" value="" required>
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-fm">Slect</button>
                          <div class="modal fade bd-fm" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="765" height="550" frameborder="0" src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=as"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                          
                        </span>
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label>Status</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="status1" value="1" required>
                            Aktif
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="status2" value="0" required>
                            Tidak Aktif
                          </label>
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label>Akses</label>

                        <table class="table table-hover">
                        <tr>
                          <th colspan="">Menu</th>
                          <th colspan=""><input type="checkbox" id="select_all" /> Select all</th>
                        </tr>
                        <tr>
                          <td>Profile Sekolah</td>
                          <td><input name="akses[]" value="dasbor/profile_sekolah" type="checkbox" class="checkbox"> Akses</td>
                        </tr>
                        <tr>
                          <td>Visi dan Misi</td>
                          <td><input name="akses[]" value="dasbor/visi_dan_misi" type="checkbox" class="checkbox"> Akses</td>
                        </tr>
                        <tr>
                          <td>Slider</td>
                          <td><input name="akses[]" value="dasbor/slide" type="checkbox" class="checkbox"> Akses</td>
                        </tr>
                        <tr>
                          <td>Kategori Buku</td>
                          <td><input name="akses[]" value="dasbor/kategori" type="checkbox" class="checkbox"> Akses</td>
                        </tr>
                        <tr>
                          <td>Buku</td>
                          <td><input name="akses[]" value="dasbor/buku" type="checkbox" class="checkbox"> Akses</td>
                        </tr>
                        <tr>
                          <td>Saran Buku</td>
                          <td><input name="akses[]" value="dasbor/saran_buku" type="checkbox" class="checkbox"> Akses</td>
                        </tr>
                        <tr>
                          <td>Kategori Video Edukasi</td>
                          <td><input name="akses[]" value="dasbor/kategori_video" type="checkbox" class="checkbox"> Akses</td>
                        </tr>
                        <tr>
                          <td>Video Edukasi</td>
                          <td><input name="akses[]" value="dasbor/video_edukasi" type="checkbox" class="checkbox"> Akses</td>
                        </tr>
                        <tr>
                          <td>Galeri</td>
                          <td><input name="akses[]" value="dasbor/galeri" type="checkbox" class="checkbox"> Akses</td>
                        </tr>

                        <tr>
                          <th colspan="5">Admin</th>
                        </tr>
                        <tr>
                          <td>Pengaturan</td>
                          <td><input name="akses[]" value="dasbor/pengaturan" type="checkbox" class="checkbox"> Baca</td>
                        </tr>
                        <tr>
                          <td>Member</td>
                          <td><input name="akses[]" value="dasbor/member" type="checkbox" class="checkbox"> Baca</td>
                        </tr>
                        <tr>
                          <td>Admin</td>
                          <td><input name="akses[]" value="dasbor/user" type="checkbox" class="checkbox"> Baca</td>
                        </tr>
                        
                        
                      </table>
                    </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                      <?php echo form_submit('submit', 'Simpan','class="btn btn-primary"');?>
                    </div>
                  <?php echo form_close();?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper