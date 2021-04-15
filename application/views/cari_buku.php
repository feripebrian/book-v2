   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                    <h2>Cari Buku</h2>
                    <div class="box">
		                <div class="box-body">
		                  <table id="example1" class="table table-bordered table-striped ">
		                    <thead>
		                      <tr>
		                        <th>No</th>
		                        <th>Buku</th>
		                        <th>Penerbit</th>
                              	<th>Kategori</th>
                              	<th>Kelas</th>
		                        <th>Aksi</th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                    	<?php $i=1; foreach($cari_buku as $buku){?>
		                      <tr>
		                        <td><?php echo $i;?></td>
		                        <td><?php echo $buku['judul_buku'];?></td>
		                        <td><?php echo $buku['penerbit'];?></td>
                              	<td><?php echo $buku['kategori'];?> </td>
                              	<td><?php echo $buku['buku_kelas'];?> <?php echo $buku['sekolah'];?></td>
					            <td><?php echo anchor('baca_buku/'.$buku['id_buku'],'Baca');?></td>		                      	
		                      </tr>
		                    	<?php $i++; }?>

		                      
		                    </tbody>
		                    <tfoot>
		                      <tr>
		                        <th>No</th>
		                        <th>Buku</th>
		                        <th>Penerbit</th>
                              	<th>Kelas</th>
		                        <th>Aksi</th>
		                      </tr>
		                    </tfoot>
		                  </table>
		                </div><!-- /.box-body -->
		            </div><!-- /.box -->
                  </div>
               </div>
            </div>
