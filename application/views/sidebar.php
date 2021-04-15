            
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Kategori</h4>
                     <ul class="list cat-list">
                     	<?php foreach($kategori as $kategori_buku){?>
                        <li>
                          <?php echo anchor('kategori/'.$kategori_buku['kategori'],'<p>'.$kategori_buku['kategori'].'</p>','class="d-flex"');?>
                           <a href="#" class="d-flex">
                           </a>
                        </li>
                     	<?php }?>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">List Buku Baru</h3>
                     <?php foreach($koleksi_buku as $buku_baru){?>
                     <div class="media post_item">
                        <div class="media-body">
                            <?php echo anchor('baca_buku/'.$buku_baru['id_buku'],'<h3>'.$buku_baru['judul_buku'].'</h3>');?>
                           <p><?php echo $buku_baru['tahun']?></p>
                        </div>
                     </div>
                     <?php }?>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->