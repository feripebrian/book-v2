<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            SARAN BUKU
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
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($saran_buku as $row){ ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['date_upload']?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['judul_buku']?></td>
                        <td><?php echo $row['penerbit']?></td>
                        <td><?php echo $row['pengarang']?></td>
                        <td><?php echo $row['tahun']?></td>
                        <td>
                          <?php echo anchor('admin/dasbor/saran_buku_hapus/'.$row['id'],'Hapus',' class="btn btn-danger btn-sm"')?>
                        </td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->