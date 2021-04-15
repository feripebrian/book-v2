<!--================Blog Area =================-->
<section class="blog_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<div class="section-top-border">
					<h3>Image Gallery</h3>
					<div class="row gallery-item">
						<?php foreach ($galeri->result() as $img) { ?>
							<div class="col-md-4">
								<a href="<?php echo $img->gambar; ?>" class="img-pop-up" title="<?php echo $img->keterangan; ?>">
									<div class="single-gallery-image" style="background: url(<?php echo $img->gambar; ?>);"></div>
								</a>
							</div>
						<?php } ?>

					</div>
					<?php echo $pagination; ?>
				</div>
			</div>
