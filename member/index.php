<?php
	include "header.php";
	$uid=$_SESSION['user_id'];
?>
<?php
	
	if(isset($_POST["btnok"]))
	{
		$email=$_SESSION['username'];
		
		$title = $_POST['title'];
		$date = $_POST['date'];
		$des= $_POST['des'];

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "INSERT INTO feedback_info values (' ','$title','$des','$email','$date','$uid','');";
		$r = mysqli_query($cn,$q);
		if($r)
		{
			?>
			<script>
				alert('succesful');
				
			</script>
			<?php
		} 
		else
		{
			?>
			<script>
				alert('error');
			</script>
			<?php
			
		}
		
	}
   
?>
<div class="hero-slider">
  <!-- Slider Item -->
  <div class="slider-item slide1" style="background-image:url(images/slider/img1.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content style text-center">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">Society Management System</h2>
            
            <a href="about.php" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2">explore</a>
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Item -->
  <div class="slider-item" style="background-image:url(images/slider/img2.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start-->
          <div class="content style text-center">
            <h2 class="text-white" data-animation-in="slideInRight">We Care About Your Facilities</h2>
            
            <a href="about.php" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2">about us</a>
          </div>
          <!-- Slide Content End-->
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Item -->
  <div class="slider-item" style="background-image:url(images/slider/img3.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content text-center style">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">Best Services</h2>
            
            <a href="contact.php" class="btn btn-main btn-white" data-animation-in="slideInRight"  data-duration-in="1.2">call us</a>
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
  <div class="container">
    <div class="cta-block row no-gutters">
      <div class="col-lg-4 col-md-6 emmergency item">
        <i class="fa fa-phone"></i>
        <h2>If any Emergency occurs</h2>
        <a href="tel:+91-977-9879-977">977-9879-977</a>
        
      </div>
      <div class="col-lg-4 col-md-6 top-doctor item">
        <i class="fa fa-newspaper"></i>
        <h2>News Updates</h2>
        <p>Regular updates related to society displayed here...</p>
        <a href="new.php" class="btn btn-main">Read more</a>
      </div>
      <div class="col-lg-4 col-md-12 working-time item">
        <i class="fa fa-hourglass-o"></i>
		<i class="fa fa-clock"></i>
        <h2>Pool-time</h2>
        <ul class="w-hours">
          <li>Male <span>8:00 - 10:00 AM</span></li>
          <li>Female <span>2:00 - 4:00 PM</span></li>
          <li>Kids <span>6:00 - 8:00 PM</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Best Features <span>of Our Society</span></h3>
						
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="new.php"><img loading="lazy" src="images/resource/6.png" alt="features image" height="70px" width="70px"></a>
									</figure>
								</div>
								<h3 class="mb-2">News</h3>
								<p>Daily Updates Related to Society Displayed here...</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="maintenance.php">
											<img loading="lazy" src="images/resource/7.png" alt="features image" height="70px" width="70px">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Maintainance</h3>
								<p>Maintainance report will be generated easily....</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="complaint.php">
											<img loading="lazy" src="images/resource/8.png" alt="features image" height="70px" width="70px">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Complaint</h3>
								<p>You can Directly complaint from here no need to go anywhere...</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="hall_booking.php">
											<img loading="lazy" src="images/resource/9.png" alt="features image" height="70px" width="70px">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Hall-Booking</h3>
								<p>Book your hall....</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->

<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/4.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>Games in Our
            <span>Club House</span>
          </h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="testimonial-carousel">
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/ches.png" alt="">
                </figure>
              </div>
              <h6>Chess</h6>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/ludo.png" alt="">
                </figure>
              </div>
              <h6>Ludo</h6>
              </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/block.png" alt="">
                </figure>
              </div>
              <h6>Wooden Block Game</h6>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/scarable.png" alt="">
                </figure>
              </div>
              <h6>Scarable</h6>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/caroom.png" alt="">
                </figure>
              </div>
              <h6>Caroom Board</h6>
             
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/uno.png" alt="">
                </figure>
              </div>
              <h6>UNO</h6>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/hello.png" alt="">
                </figure>
              </div>
              <h6>billiards</h6>
              
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/foosball.png" alt="">
                </figure>
              </div>
              <h6>FoosBall</h6>
             
            </div>
          </div>
          <!--Slide Item-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End testimonial-section-->
<section class="gallery bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>People
            <span>For helping us</span>
          </h3>
          
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/plumber2.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/plumber2.jpg"></a>
          <h3>Plumber</h3>
		  
          <p>9409909409</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/electrician.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/electrician.jpg"></a>
          <h3>Electrician</h3>
          <p>9409909409</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/sweeper.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/sweeper.jpg"></a>
          <h3>Sweeper</h3>
          <p>9409909409</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/lift.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/lift.jpg"></a>
          <h3>Lift Repairing</h3>
          <p>9409909409</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/watchman2.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/watchman2.jpg"></a>
          <h3>Watchman</h3>
          <p>9409909409</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gasline.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gasline.jpg"></a>
          <h3>Gas Line Repairing</h3>
          <p>9409909409</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--team section-->
<section class="team-section section" style=background-color:silver;>
  <div class="container">
    <div class="section-title text-center">
      <h3>
        Admins
      </h3>
    </div>
	<?php
		$cn= mysqli_connect("localhost","root","","sms_admin_db");
		$q="select Name,Contact_no from wing_admin_info";
		
		$r=mysqli_query($cn,$q);
		while($row=mysqli_fetch_array($r))
		{
			$name = $row['Name'] ;
			$contact = $row['Contact_no'] ;
	?>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          
          <div class="contents text-center">
            <h4><?php echo $name; ?></h4>
            <i class="fa fa-phone"></i>
        <a href="tel:+91-977-9879-977"><?php echo $contact; ?></a>
          </div>
        </div>
      </div>
    </div>
		<?php } ?>
  </div>
</section>
<!--End team section-->

<!-- Contact Section -->

<!-- End Contact Section -->
<!-- Section -->
<section class="section style-three pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-0">
        <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
          <div class="section-title">
            <h3>Feedback <span>form</span></h3>
          </div>
          <form name="contact_form" class="default-form contact-form" action="#" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="title" placeholder="Title" required="">
                </div>
               </div>
              <div class="col-md-6">
                
                <div class="form-group">
                  <input class="form-control" type="date" name="date" placeholder="Date" required="" id="datepicker" autocomplete="off">
                  
                </div>
				</div>
				</div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" name="des" placeholder="Your Message" required=""></textarea>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn-style-one" name="btnok">submit now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- End Section -->

<?php
	include "footer.php";
?>