<!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            SLIDER
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
                  
                  <!-- Extra large modal -->
                  <?php echo anchor('admin/dasbor/slide_tambah','<i class="fa fa-plus-square"></i> Tambah Slde','type="button" class="btn btn-primary"');?>


                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Update At</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($slide  as $row){ ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['image']?></td>
                        <td><?php echo $row['description']?></td>
                        <td><?php echo $row['updated_at']?></td>
                        <td><?php 
                          $answer = $row['status'];  
                          if ($answer == "1") {          
                              echo 'Aktif';      
                          }
                          else {
                              echo 'Tidak Aktif';
                          }          
                        ?></td>
                        <td>
                          <?php echo anchor('admin/dasbor/slide_edit/'.$row['id'],'Edit','class="btn btn-info btn-sm"')?> | 
                          <?php echo anchor('admin/dasbor/slide_hapus/'.$row['id'],'Hapus',' class="btn btn-danger btn-sm"')?>
                        </td>
                      </tr>
                      <?php }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Update At</th>
                        <th>Status</th>
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