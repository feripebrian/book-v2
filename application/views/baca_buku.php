   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
            	<?php foreach($baca as $baca_buku){?>
            	<div class="single-post">
                  <div class="blog_details">
                    <h2>Baca Buku</h2>

                    <iframe src="<?php echo $baca_buku['file']?>" style="width: 100%; height: 1100px; border: none;"></iframe>
                  </div>
               </div>
           		<?php }?>


            </div>
