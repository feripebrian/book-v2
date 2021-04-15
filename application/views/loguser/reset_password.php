  <body class="register-page">
    <div class="register-box">
      <div class="register-logo"><img src="<?php echo base_url()?>source/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png" style="height:278px; width:273px">
        <br>
        SMP Negeri 5 Merauke
      </div>

      <div class="register-box-body">
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
        <p>Hello <span><?php echo $nama; ?></span>, Silakan isi password baru anda.</p>


        <?php echo form_open('lupa_password/reset_password/token/'.$token,'')?>
          <div class="form-group has-feedback">
            <?php echo form_password('password','','class="form-control" placeholder="Password"')?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <?php echo form_error('password','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
          </div>
          <div class="form-group has-feedback">
            <?php echo form_password('passconf','','class="form-control" placeholder="Retype password"')?>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            <?php echo form_error('passconf','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <?php echo form_submit('submit', 'Reset','class="btn btn-primary btn-block btn-flat"');?>
            </div><!-- /.col -->
          </div>
        <?php echo form_close();?>    

        <?php echo anchor('log_user','Login Member','class="text-center"');?>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->