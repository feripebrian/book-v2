    <!-- footer start -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Beavers</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>

                        <?php 
                          $date       = date("Y-m-d");
                          $pengunjunghariini  = $this->db->query("SELECT * FROM tb_visitor WHERE date='".$date."' GROUP BY ip")->num_rows();
                          $dbpengunjung       = $this->db->query("SELECT COUNT(hits) as hits FROM tb_visitor")->row(); 
                          $totalpengunjung    = isset($dbpengunjung->hits)?($dbpengunjung->hits):0;
                          $bataswaktu         = time() - 300;
                          $pengunjungonline   = $this->db->query("SELECT * FROM tb_visitor WHERE online > '".$bataswaktu."'")->num_rows();

                        ?> 
                        <table style=" font-size: 16px;">
                          <tbody>
                            <tr>
                              <td>Pengunjung Hari ini</td>
                              <td>: <?php echo $pengunjunghariini ?> Orang</span></td>
                            </tr>
                            <tr>
                              <td>Total Pengunjung</td>
                              <td>: <?php echo $totalpengunjung ?> Orang</td>
                            </tr>
                            <tr>
                              <td>Pengunjung Online</td>
                              <td>: <?php echo $pengunjungonline ?> Orang</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
<!-- Button trigger modal -->
  


    <!-- JS here -->
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/ajax-form.js"></script>
    <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/scrollIt.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/nice-select.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/js/gijgo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.min.js"></script>



    <!--contact js-->
    <script src="<?php echo base_url();?>assets/js/contact.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.form.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/mail-script.js"></script>


    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>

    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

    




</body>

</html>