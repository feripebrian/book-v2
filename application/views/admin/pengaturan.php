<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pengaturan
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
                  <?php foreach($pengaturan as $row){ ?>
                  <?php echo form_open('admin/dasbor/pengaturan_update/'.$row['id'],'role="form"');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama Sekolah</label>
                      <?php echo form_input('nama_sekolah',$row['nama_sekolah'],'class="form-control" placeholder="Nama" required');?>
                    </div>
                    <div class="form-group">
                      <label>Nama Kepala Sekolah</label>
                      <?php echo form_input('kepala_sekolah',$row['kepala_sekolah'],'class="form-control" placeholder="Nama" required');?>
                    </div>
                    <div class="form-group">
                        <label>Foto Kepala Sekolah</label>
                        <br><span>Ukuran Logo Width : 300px Heigth :400px</span>

                      <div class="input-group input-group-sm">
                        <input type="text" id="foto" name="foto" class="form-control" value="<?php echo $row['foto']?>">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-foto">Slect</button>
                          <div class="modal fade bd-foto" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="1000" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=foto"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                        <label>Logo Login</label>
                        <br><span>Ukuran Logo Width : 300px Heigth :300px</span>

                      <div class="input-group input-group-sm">
                        <input type="text" id="logo_login" name="logo_login" class="form-control" value="<?php echo $row['logo_login']?>">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-logo_login">Slect</button>
                          <div class="modal fade bd-logo_login" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="1000" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=logo_login"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                        <label>Logo</label>
                        <br><span>Ukuran Logo Width : 176px Heigth :36px</span>

                      <div class="input-group input-group-sm">
                        <input type="text" id="logo" name="logo" class="form-control" value="<?php echo $row['logo']?>">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-logo">Slect</button>
                          <div class="modal fade bd-logo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="1000" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=logo"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Banner</label>
                        <br><span>Ukuran Banner Width : 1920px Heigth :700px</span>

                      <div class="input-group input-group-sm">
                        <input type="text" id="banner" name="banner" class="form-control" value="<?php echo $row['banner']?>">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-banner">Slect</button>
                          <div class="modal fade bd-banner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="1000" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=banner"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                    <label>Selogan</label>
                    <?php echo form_input('selogan',$row['selogan'],'class="form-control" placeholder="Title" required');?>
                    </div>

                    <div class="form-group">
                        <label>Background</label>
                        <br><span>Ukuran Logo Width : 1920px Heigth :400px</span>

                      <div class="input-group input-group-sm">
                        <input type="text" id="background" name="background" class="form-control" value="<?php echo $row['background']?>">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-background">Slect</button>
                          <div class="modal fade bd-background" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="1000" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=background"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Maskot</label>
                        <br><span>Ukuran Logo Width : 467px Heigth :515px</span>

                      <div class="input-group input-group-sm">
                        <input type="text" id="maskot" name="maskot" class="form-control" value="<?php echo $row['maskot']?>">
                        <span class="input-group-btn">
                          <button class="btn btn-info btn-flat" type="button" data-toggle="modal" data-target=".bd-maskot">Slect</button>
                          <div class="modal fade bd-maskot" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <iframe  width="1000" height="550" frameborder="0" id='image' src="<?php echo base_url()?>filemanager/dialog.php?type=1&field_id=maskot"></iframe>
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </span>
                      </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Tentang E-Book</label>
                        <textarea id="editor-ckeditor" name="tentang_e-book"><?php echo $row['tentang_e_book']?></textarea>
                      </div>
                    <div class="form-group">
                      <label>Meta</label>
                      <?php echo form_input('meta',$row['meta'],'class="form-control" placeholder="Title" required');?>
                    </div>
                    <div class="form-group">
                      <label>Deskription</label>
                      <?php echo form_input('descriptions',$row['descriptions'],'class="form-control" placeholder="Title" required');?>
                    </div>
                  </div>
                  <div class="box-footer">
                    <?php echo form_submit('submit', 'Simpan','class="btn btn-primary"');?>
                  </div>
                  <?php echo form_close();?>
                  <?php }?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->