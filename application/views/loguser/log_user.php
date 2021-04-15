
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <img src="<?php echo base_url()?>source/f2399a3c-e44e-4e2a-82d0-520696ffad1b.png" style="height:278px; width:273px">
        <br>
        SMP Negeri 5 Merauke
      </div><!-- /.login-logo -->
      <div class="login-box-body">
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
        
        <?php echo form_open('log_user/user_login',''); ?>
          <div class="form-group has-feedback">
            <?php echo form_input('id_member','','class="form-control" placeholder="Nip / Nis"');?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <?php echo form_error('id_member','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
          </div>
          <div class="form-group has-feedback">
            <?php echo form_password('password','','class="form-control" placeholder="Password"');?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <?php echo form_error('password','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
          </div>
          <div class="form-group has-feedback">
            <select class="form-control" name="kategori">
              <option value="" selected="select">Pilih Status</option>
              <option value="Guru">Guru</option>
              <option value="Siswa">Siswa</option>
            </select>
            <?php echo form_error('kategori','<small class="label label-danger"><i class="fa fa-clock-o"></i>','</small>'); ?>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <?php echo form_submit('submit', 'Sign In','class="btn btn-primary btn-block btn-flat"');?>
            </div><!-- /.col -->
          </div>
        <?php echo form_close();?>

        <?php echo anchor('log_user/lupa_password','Lupa Password','class="text-center"');?> | 
        <?php echo anchor('log_user/daftar','Daftar Member Baru','class="text-center"');?>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
