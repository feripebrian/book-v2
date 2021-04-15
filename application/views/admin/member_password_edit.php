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
                  <?php foreach($member_password_edit  as $row){ ?>
                  <?php echo form_open('admin/dasbor/member_password_update/'.$row['id']);?>

                    <div class="box-body">
                      
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
                    </div><!-- /.box-body -->
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
      </div><!-- /.content-wrapper