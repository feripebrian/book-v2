<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
				<?php foreach ($show as $show_video) { ?>
					<div class="single-post">
						<div class="blog_details">
							<h2>
								<?php echo $show_video['judul_video'] ?>
							</h2>

							<?php
							$link = $show_video['link'];
							if (empty($link)) {
								# code...
							} else {
								echo "<video width=\"560\" height=\"315\" controls>
											<source src=\"" . $show_video['link'] . "\" type=\"video/mp4\" />
											Browsermu tidak mendukung tag ini, upgrade donk!
										</video>";
							}
							?>
							<?php
							$embed = $show_video['embed'];
							if (empty($embed)) {
								# code...
							} else {
								echo "<iframe width=\"560\" height=\"315\" src=\" " . $show_video['embed'] . " \" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
							}
							?>
							<?php echo $show_video['keterangan'] ?>
						</div>
					</div>
				<?php } ?>


			</div>
