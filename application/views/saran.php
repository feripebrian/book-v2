   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
              <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Saran Buku</h2>
                    </div>
                    <div class="col-lg-12">
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

                      <?php echo form_open('saran_buku/saran_buku_baru/','class="form-contact contact_form"');?>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <?php echo form_input('nama','','class="form-control valid" placeholder="Nama" required');?>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <?php echo form_input('judul_buku','','class="form-control valid" placeholder="Judul Buku" required');?>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <?php echo form_input('pengarang','','class="form-control valid" placeholder="Pengarang" required');?>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <?php echo form_input('penerbit','','class="form-control valid" placeholder="penerbit" required');?>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <?php echo form_input('tahun','','class="form-control valid" placeholder="Tahun" required');?>
                            </div>
                          </div>
                        </div> 
                        <div class="form-group mt-3">
                          <?php echo form_submit('submit', 'Kirim','class="button button-contactForm boxed-btn"');?>
                        </div>
                      <?php echo form_close();?>
                    </div>
                </div>
            </div>
            