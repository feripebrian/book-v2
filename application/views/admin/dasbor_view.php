<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Log Member Login</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Id User</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Waktu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($log_user  as $row){ ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['id_member']?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['kategori']?></td>
                        <td><?php echo $row['date']?> | <?php echo $row['time']?></td>
                      </tr>
                      <?php }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Id User</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Waktu</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->