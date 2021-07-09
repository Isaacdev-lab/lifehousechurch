
  <footer class="site-footer">
    <div class="container">
      <div class="row"> 
        <!-- Start Footer Widgets -->
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">About Church</h4>
          <img src="images/lifehouselogo.png" alt="Logo">
		  <?php
				$result = $db->prepare("SELECT * FROM welcome");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>  
          <div class="spacer-20"></div>
        <?php echo strip_tags(substr($row['body'],0,180)) ;?>...  <a href="about.php">Read More</a>
		  <?php } ?>
		</div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Quick Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="events.php">All Events</a></li>
            <li><a href="news-updates.php">News Update</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
		 <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Contact Information</h4>
          <p>Life House Church 58, Olorunlogbon Street, Anthony, Lagos</p>
          <?php echo $row['email']; ?> </br>
          <?php echo $row['phone']; ?> </br>
		      <?php echo $row['linkedin']; ?></br>
		 
        </div>
		
      </div>
    </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; LifeHouseChurch. All Rights Reserved</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">
          <div class="social-icons"> 
            <a href="https://www.facebook.com/<?php echo $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a> 
            <a href="https://instagram.com/<?php echo $row['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://youtube.com/<?php echo $row['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
	<?php } ?>
  </footer>
  <!-- End Footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
<script src="style-switcher/js/jquery_cookie.js"></script> 
<script src="style-switcher/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> 

</body>

<!-- Mirrored from html.imithemes.com/nativechurch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2016 06:08:50 GMT -->
</html>