   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <h2>Video Edukasi</h2>
                    <div class="box">
		                <div class="box-body">
		                  <table id="example1" class="table table-bordered table-striped ">
		                    <thead>
		                      <tr>
		                        <th>No</th>
		                        <th>Judul</th>
		                        <th>Aksi</th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                    	<?php $i=1; foreach($cari_video as $video){?>
		                      <tr>
		                        <td><?php echo $i;?></td>
		                        <td><?php echo $video['judul_video'];?></td>
                            	<td><?php echo anchor('video_edukasi/'.$video['id'],'Lihat');?></td>
		                      </tr>
		                    	<?php $i++; }?>

		                      
		                    </tbody>
		                    <tfoot>
		                      <tr>
		                        <th>No</th>
		                        <th>Judul</th>
		                        <th>Aksi</th>
		                      </tr>
		                    </tfoot>
		                  </table>
		                </div><!-- /.box-body -->
		            </div><!-- /.box -->
                  </div>
               </div>
            </div>
