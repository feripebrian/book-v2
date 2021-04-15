      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Member
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
                  <?php echo form_open('admin/dasbor/member_add');?>

                    <div class="box-body">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <?php echo form_input('nama','','class="form-control" placeholder="nama"');?>
                        <?php echo form_error('nama','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                          <option value="" selected="select">Pilih Kategori</option>
                          <option value="guru">Guru</option>
                          <option value="siswa">Siswa</option>
                        </select>
                        <?php echo form_error('keterangan','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
                      </div>
                      <div class="form-group">
                        <label>NIK / NIS</label>
                        <?php echo form_input('id_member','','class="form-control" placeholder="Nama"');?>
                        <?php echo form_error('id_member','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="" class="form-control" placeholder="Email" >
                        <?php echo form_error('email','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <?php echo form_password('password','','class="form-control" placeholder="Password"');?>
                        <?php echo form_error('password','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
                      </div>
                      <div class="form-group">
                        <label>Retype Password</label>
                        <?php echo form_password('passconf','','class="form-control" placeholder="Retype password"');?>
                        <?php echo form_error('passconf','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
                      </div>
                      
                      <div class="form-group">
                        <label>Status</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="status1" value="1">
                            Aktif
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="status2" value="0">
                            Tidak Aktif
                          </label>
                        </div>
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