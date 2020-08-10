<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>     
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shrey Creations</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="mail.php">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section>
		<?php if(!isset($_SESSION['username'])): header("location: index.html");?>

    <?php else: ?>

    <?php endif ?>
		<div><?php echo "<h3> Welcome ".$_SESSION['username']."</h3>" ?></div>
		<h2><a href="logout.php">Logout</a></h2>
	</section>


<section class="banner cover-bg">
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="col-12 caption text-center">
				<h4 class="mt-20 mb-20">Hello, my name is Ishan Gupta </h4>
			<h2 class="mt-20">REMORSE GAMING</h2>
			<p class="mt-20">Think of some creative videos to search of pubg ,<br> like shrey creations.</p>
			<div class="social_icon text-center mt-20">

			<a href="https://www.twitter.com/@IshanGu80903889"><span><i class="fa fa-twitter"></i></span></a>
			<a href="https://www.instagram.com/hogxremorse"><span><i class="fa fa-instagram"></i></span></a>
			<a href="https://www.linkedin.com/in/ishan-gupta-8444401b3"><span><i class="fa fa-linkedin"></i></span></a>
			<a href="https://www.youtube.com/channel/UCDUmFueeVX-KZDzEBowjiVA"><span><i class="fa fa-youtube-play"></i></span></a>
			<a href="https://www.tumblr.com/blog/remorse-gaming"><span><i class="fa fa-tumblr"></i></span></a>
			<a href="https://www.google.com/maps/place/1%2F229,+Ghanshahida+Ujriyaon,+Vishal+Khand,+Gomti+Nagar,+Lucknow,+Uttar+Pradesh+226010/@26.853341,80.9828928,19z/data=!3m1!4b1!4m12!1m6!3m5!1s0x399bfd33db7dac05:0x300c7bd2960e1e86!2sGate+No.1+Ram+Manohar+Lohiya+Park!8m2!3d26.8540304!4d80.9821307!3m4!1s0x399bfd33b3cf8ef9:0x23055d333a3ee1df!8m2!3d26.853341!4d80.98344"><span><i class="fa fa-map-marker"></i></span></a>
			</div>
			</div>
		</div>
	</div>
</section>


<section class="about section_padding pb-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 section_title text-center">
				<p>who am i</p>
				<h3>about me</h3>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="part_photo">
					<img class="img-fluid" src="images/ih1.jpg">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="part_text">
				<h4 class="mb-30">Hello</h4>
				<p class="pb-35">I'm Ishan Gupta.I am a web designer also a video designer,and I'm very pssionate and dedicted towards my work.
				With some experience as a professtional designer , I have acquired the skills to make your project a success or you can tell me that what type of videos of PUBG, you want to see.</p>
				<div class="info mt-35">
					<ul>
						<li>
							<span class="title"><strong>Name:</strong></span>
							<span class="value"><strong>Ishan Gupta</strong></span>							
						</li>
						<li>
							<span class="title"><strong>Address:</strong></span>
							<span class="value"><strong>INDIA</strong></span>							
						</li>
                        <li>
							<span class="title"><strong>Age:</strong></span>
							<span class="value"><strong>17</strong></span>							
						</li>
                        <li>
							<span class="title"><strong>Phone:</strong></span>
							<span class="value"><strong>+91 965 1700 959</strong></span>							
						</li>
					</ul>
				</div>
				<a href="https://en.savefrom.net/1-youtube-video-downloader-3/" class="btn mr-2">Download Videos</a>
				<a href="https://www.gmail.com" class="btn">Connect to me</a>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="hire_me section_padding text-center cover-bg">
	<div class="container">		
		<h2>Hire me for more/next project</h2>
		<a href="tel:9651700959" class="btn mt-30">Contact ME</a>
	</div>
</section>

<section class="services section_padding">
	<div class="container">
		<div class="row">
			<div class="section_title text-center">
				<p>What do i do</p>
				<h3>Services</h3>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-12 py-15">
				<div class="service_box box">
					<div class="icon">
						<i class="fa fa-paint-brush"></i>
					</div>
					<div class="text">
						<h4 class="box_title mb-20">Web Design</h4>
						<p>Web design is not just about creating pretty layouts. It’s about understanding the marketing challenge behind your business.</p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-6 col-sm-12 py-15">
				<div class="service_box box">
					<div class="icon">
						<i class="fa fa-cogs"></i>
					</div>
					<div class="text">
						<h4 class="box_title mb-20">Web Development</h4>
						<p>Website without visitors is like a ship lost in the horizon.</p>
					</div>
				</div>
			</div>

				<div class="col-lg-4 col-md-6 col-sm-12 py-15">
				<div class="service_box box">
					<div class="icon">
						<i class="fa fa-video-camera"></i>
					</div>
					<div class="text">
						<h4 class="box_title mb-20">Videos</h4>
						<p>If you think you are bad, then I’m your Dad.</p>
					</div>
				</div>
			</div>

				<div class="col-lg-4 col-md-6 col-sm-12 py-15">
				<div class="service_box box">
					<div class="icon">
						<i class="fa fa-mobile"></i>
					</div>
					<div class="text">
						<h4 class="box_title mb-20">Illustrative Design</h4>
						<p>Design is not just what it looks like and feels like. Design is how it works.</p>
					</div>
				</div>
			</div>

				<div class="col-lg-4 col-md-6 col-sm-12 py-15">
				<div class="service_box box">
					<div class="icon">
						<i class="fa fa-pie-chart "></i>
					</div>
					<div class="text">
						<h4 class="box_title mb-20">Seo-Friendly</h4>
						<p>Good SEO work only gets better over time. It’s only search engine tricks that need to keep changing when the ranking algorithms change.</p>
					</div>
				</div>
			</div>

				<div class="col-lg-4 col-md-6 col-sm-12 py-15">
				<div class="service_box box">
					<div class="icon">
						<i class="fa fa-wrench"></i>
					</div>
					<div class="text">
						<h4 class="box_title mb-20">Support</h4>
						<p>The advance of technology is based on making it fit in so that you don't really even notice it, so it's part of everyday life.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section style="background-image: url(images/bg13.jpg), linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));" class="testimonial section_padding cover-bg">
	<div class="container">
		<div class="row">
			<div class="section_title text-center">
				<p>What our client say ?</p>
				<h3>Testimonials</h3>
			</div>
			<div class="col-md-10 offset-md-1">
				<div class="testimonials_items_main">
					<div class="testimonial_item">
						<div class="icon mb-20">
							<i class="fa fa-quote-left"></i>
						</div>
						<p>Life is like PUBG..It will knock you down but the loved one's will always be there to revive you.</p>

						<div class="testimonial_author">
							<div class="part_img">
								<img src="images/testimonial/021.jfif">
							</div>
							<div class="text">
								<a href="https://www.gupta.ishan2004@gmail.com"></a>
								<h5>Scout</h5>
								<h6>PUBG Pro</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section style="background-image: url(images/hi3.jpg), linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
height: 100vh;" class="section_padding blog">
	<div class="container">
		<div class="row">
			<div class="section_title text-center">
				<p>Famous Players</p>
				<h3>PUBG Lovers</h3>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="blog_item">
					<div class="part_img">
						<img class="img-fluid" src="images/testimonial/te1.jpg">
						<div class="post-info-category">
							<a href="https://www.creativityatwork.com/2014/02/17/what-is-creativity/">Creative</a>
						</div>
					</div>
					<div class="content">
						<div class="title">
							<h4><a href="https://en.wikipedia.org/wiki/Online_streamer">Streamer</a></h4>
							<div class="meta">
								<span>6 AUGUST 2020</span>
							</div>
						</div>

						<p>A sniper is like a genius - it’s not enough to be one, you have to be one at something.</p>
						<div class="author">
							<div class="author_img">
								<img class="img-fluid" src="images/testimonial/01.jpg">
							</div>
							<div class="text">
								<h5><a href="https://celebhungry.com/dynamo-gaming/#:~:text=Aadii%20Sawant%20is%20the%20founder,mumbai%20in%20a%20marathi%20family.&text=Currently%20he%20play%20and%20streams%20only%20pubg%20mobile%20his%20youtube%20channel.">Adii Sawant</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="blog_item">
					<div class="part_img">
						<img class="img-fluid" src="images/testimonial/te7.jpg">
						<div class="post-info-category">
							<a href="https://en.wikipedia.org/wiki/Illustration">Illustrative</a>
						</div>
					</div>
					<div class="content">
						<div class="title">
							<h4><a href="https://www.androidauthority.com/pubg-mobile-esports-pmco-2019-interview-1014451/">Streamer/Competetive</a></h4>
							<div class="meta">
								<span>6 AUGUST 2020</span>
							</div>
						</div>

						<p>I survived because the fire inside me was burning greater than the fire around me.</p>
						<div class="author">
							<div class="author_img">
								<img class="img-fluid" src="images/testimonial/te7.jpg">
							</div>
							<div class="text">
								<h5><a href="https://www.thenewsdigit.com/soul-regaltos-pubg-id-real-name-kd-wiki-bio/2163/#:~:text=He%20is%20an%20Indian%20Gamer,like%20PMPL%2C%20PMCO%2C%20etc.">Parv Singh</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="blog_item">
					<div class="part_img">
						<img class="img-fluid" src="images/testimonial/te9.jpg">
						<div class="post-info-category">
							<a href="https://en.wikipedia.org/wiki/Attractiveness">Attractive</a>
						</div>
					</div>
					<div class="content">
						<div class="title">
							<h4><a href="https://www.toppr.com/guides/essays/essay-on-pubg-mobile-game-addiction/">Provides Clips</a></h4>
							<div class="meta">
								<span>6 AUGUST 2020</span>
							</div>
						</div>

						<p>We are PUBG lovers,We don't need beautiful,We need battery full.</p>
						<div class="author">
							<div class="author_img">
								<img class="img-fluid" src="images/testimonial/te9.jpg">
							</div>
							<div class="text">
								<h5><a href="https://pubggaming.in/levinho-biography-girlfriends-wiki/">Brahim(Levinho)</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact section_padding cover-bg">
	<div class="container">
		<div class="row">
			<div class="section_title text-center">
				<p>Query Box</p>
				<h3>Please write your query in the box.</h3>
				<h2 style="color: #fff;
				font-size: 20px;"><span>and send the mail on the given mail address<i class="fa fa-level-down"></i></span></h2>
			</div>
			<div class="col-md-12">
				<div class="part_info">
					
					<div class="row">
						<div class="col-md-4">
							<div class="info-block text-center">
								<div class="icon">
									<i class="fa fa-map-marker"></i>
								</div>
								<h5>My Loction:</h5>
								<p>1/229 Vishalkhand-1 Gomtinagar Lucknow.</p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="info-block text-center">
								<div class="icon">
									<i class="fa fa-mobile"></i>
								</div>
								<h5>Phone Number:</h5>
								<p>(+91) 965 170 0959</p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="info-block text-center">
								<div class="icon">
									<i class="fa fa-envelope"></i>
								</div>
								<h5>Email Address:</h5>
								<p>gupta.ishan2004@gmail.com</p>
							</div>
						</div>

					</div>
				</div>
			</div>


			<div class="col-md-12">
				<div class="contact-form">
					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" placeholder="Name" required="required">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input type="email" name="email" placeholder="Email" required="required">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name="subject" placeholder="Subject" required="required">
								</div>
							</div>

							<div class="col-md-12">
								<textarea placeholder="Type Your Message" required="required"></textarea>
							</div>

							<div class="col-md-12">
								<a href="https://www.gmail.com" type="submit" class="btn">Send Mail</a>
							</div>
						</div>
					</form>
				</div>
			</div>


		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>