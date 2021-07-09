<?php include "header.php"; ?>  
<!-- End Site Header --> 
  <!-- Start Hero Slider -->
  <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class=" parallax" style="background-image:url(images/slide-1.jpg);"></li>
      <li class="parallax" style="background-image:url(images/slide-2.jpg);"></li>
    </ul>
  </div>
  <!-- End Hero Slider --> 
  <!-- Start Notice Bar -->
  <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x" style="color: #FC0A00;"></i></span> <span class="title-note" style="background: #010101; ">Next</span> <strong>Upcoming Event</strong> </div>
        <?php
				$result = $db->prepare("SELECT * FROM events ORDER BY id DESC Limit 1");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
               ?> 
		<div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
          <h5><a href="single-event.html"><?php echo $row['title']; ?></a></h5>
          <span class="meta-data"><?php echo $row['venue']; ?></span> </div>
        <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="July 13, 2016">
          <div class=""> <span ><?php echo $row['date']; ?></span> </div>
          
        
		</div>
		  <?php } ?>
        <div class="col-md-2 col-sm-6 hidden-xs"> 
          <a href="events.php" id="custom-button" class="btn btn-primary btn-lg btn-block" style="background: #FC0A00;">All Events</a> 
        </div>
      </div>
    </div>
  </div>
  <!-- End Notice Bar --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row"> 
          <!-- Start Featured Blocks -->
          
          <!-- End Featured Blocks --> 
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-6"> 
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <h3 class=" titles">Welcome to RCCG Life House Church</h3>
              </header>
			  <?php
				$result = $db->prepare("SELECT * FROM welcome");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>  
<?php echo $row['body']; ?>             
			  <?php } ?>
            </div>
            <div class="spacer-30"></div>
            <!-- Latest News -->
            <div class="listing post-listing ">
              <header class="listing-header">
                <h3 class="titles">Our Latest News</h3>
              </header>
              <section class="listing-cont">
                <ul>
				<li class="item post">
                    <div class="row">
                      <!-- <div class="col-md-12" style='background: black; color: #fff;'> -->
                      <div class="col-md-12">
					  <?php
				$result = $db->prepare("SELECT * FROM news ORDER BY id DESC Limit 3");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){   
               ?> 
                        <div class="post-title">
                          <h2 class=" titles"><a href="news_post.php?id=<?php echo $row['id'];?>"><?php echo $row['news_title']; ?></a></h2>
                          <span class="meta-data"><i class="fa fa-calendar"></i> on <?php echo $row['date']; ?></span>
						 <p><?php echo strip_tags(substr($row['news_detail'],0,180)) ;?>...</p>
						 </div>
						<?php } ?>
                      </div>
                    </div>
					 <center> -- <a href="news-updates.php">All News</a> --</center>
                  </li>
                </ul>
              </section>
			 </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 col-sm-6">
            <!-- Latest Sermons -->
            <div class="listing sermons-listing">
              <header class="listing-header">
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item sermon featured-sermon"> <span class="date"></span>
                    <h4><a href="#">Like Us on Facebook</a></h4>
					<?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
                    <div class="featured-sermon-video">
                      <!--Facebook Page-->
                          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F
                            <?php echo $row['facebook'];?>%2F&tabs=timeline&width=20025&height=215&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=403202216515066" 
                              width="100%" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" 
                                allowTransparency="true"></iframe>
								</div> <?php } ?>
                  </li>
                  <!-- <li class="item post">
                    <div class="row">
                      <div class="col-md-12 "> <a href="donate.php" class="media-box"> <img src="images/giving.jpg" alt="" class="img-thumbnail"> </a></div>
                     </div>
                  </li> -->
                  <li class="item post">
                    <div class="row">
                      <div class="col-md-12"> <a href="gallery.php" class="media-box"> <iframe src='https://www.youtube.com/embed//WgywBXtl9Xw' frameborder='0' allowfullscreen></iframe> </a></div>
                     </div>
                  </li>
				          <li class="item post">
                    <div class="row">
                      <div class="col-md-12"> <a href="gallery.php" class="media-box"> <iframe src='https://www.youtube.com/embed/Di8d2rThDbA' frameborder='0' allowfullscreen></iframe> </a></div>
                     </div>
                  </li>
                  
                 </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="featured-gallery px-2" style="background: #fff;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <img src="./images/gathering.jpg" alt="logo" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h1>The Encounter</h1>
          <h2 style="font-weight: 500; font-size: 17px; line-height: 1.4em; margin-bottom: 30px;">A deep seated encounter with the Almighty await those that will come to him and yield to his will. And this is what brings about the transformation that leads to destiny fulfilment in the life of the believer.</h2>
          <h2 style="font-weight: 500; font-size: 17px; line-height: 1.4em; margin-bottom: 30px;">We believe that irrespective of one’s station in life or how shattered or battered one’s destiny is currently, God is able to gather such a life and one back together again.</h2>
          <h2 style="font-weight: 500; font-size: 17px; line-height: 1.4em; margin-bottom: 30px;">Therefore as many as are willing, we invite you to a deep encounter with the Almighty via his word at Life House Church. It will be our privilege to help you get there, for to that purpose, we have been called.</h2>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="featured-gallery" style="background: #fff; ">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>The Encounter</h1>
            <h2 style="font-weight: 500; font-size: 17px; line-height: 1.4em; margin-bottom: 30px;">A deep seated encounter with the Almighty await those that will come to him and yield to his will. And this is what brings about the transformation that leads to destiny fulfilment in the life of the believer.</h2>
            <h2 style="font-weight: 500; font-size: 17px; line-height: 1.4em; margin-bottom: 30px;">We believe that irrespective of one’s station in life or how shattered or battered one’s destiny is currently, God is able to gather such a life and one back together again.</h2>
          </div>
        
          <div class="col-md-6"> 
            <img src="./images/gathering.jpg" alt="logo" class="img-fluid"> 
          </div>
        </div>
      </div> 
    </div>
  </section>

  <section class="featured-gallery bg-white">
    <div class="container py-5" style="color: #191569;">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="./images/theword.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">The Worship</h3>
              <p class="card-text" style="font-weight: 500; font-size: 17px; line-height: 1.4em;">For great is the Lord and most worthy of praises; He is to be feared above all gods. For all the gods of the nations are idols, but the LORD made the heavens.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="color: #191569;">
          <div class="card">
            <img src="./images/theword.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">The Prayers</h3>
              <p class="card-text" style="font-weight: 500; font-size: 17px; line-height: 1.4em;">Now when He had taken the scroll, the four living creatures and the twenty-four elders fell down before the Lamb, each having a harp, and golden bowls full of incense, which are the prayers of the saints. Rev. 5:8</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="color: #191569;">
          <div class="card">
            <img src="./images/theword.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">The Word</h3>
              <p class="card-text" style="font-weight: 500; font-size: 17px; line-height: 1.4em;">I will worship toward your holy temple. And praise your name for your loving kindness and your truth: For you have magnified your word above all your name.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Featured Gallery -->
  <section>
    <div class="featured-gallery" style="background: #010101;">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <h4>Updates from our gallery</h4>
            <a href="gallery.php" class="btn btn-default btn-lg">More Galleries</a> 
          </div>
          <?php
          $result = $db->prepare("SELECT * FROM gallery ORDER BY id DESC Limit 3");
          $result->execute();
          for($i=0; $row = $result->fetch(); $i++){   
                ?> 
          <div class="col-md-3 col-sm-3 post format-image"> 
            <a href="uploads/<?php echo $row['file'];?>" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="uploads/<?php echo $row['file'];?>" alt=""> </a> 
          </div>
          <?php } ?>
        </div>
      </div> 
    </div>
  </section>


  <!-- End Featured Gallery --> 
  <!-- Start Footer -->
  <?php include "footer.php"; ?>