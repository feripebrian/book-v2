<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            VISI DAN MISI
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
                  <?php foreach($visi_dan_misi as $row){ ?>
                  <?php echo form_open('admin/dasbor/visi_dan_misi_update/'.$row['id'],'role="form"');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label>Judul</label>
                      <?php echo form_input('judul',$row['judul'],'class="form-control" placeholder="Title" required');?>
                    </div>
                    <div class="form-group">
                        <label>Profile</label>
                        <textarea id="editor-ckeditor" name="isi"><?php echo $row['isi']?></textarea>
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