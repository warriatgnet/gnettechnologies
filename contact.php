<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	
    <link rel="stylesheet" href="gnetteq/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="gnetteq/lib/css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="gnetteq/lib/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-md  navbar-dark" style="background-color: rgb(27, 26, 26); border-bottom: 3px solid gold;">
        <a class="navbar-brand" href="#"><img src="gnetteq/lib/img/G-net logo.jpg" alt="Gnet logo" id="avatar"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse offset-md-2 offset-lg-3" id="collapsibleNavbar">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" id="nav-link" href="#">Home <span class="sr-only"></span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-link"  href="#">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="nav-link"  href="#">Services</a>
            </li>   
            <li>
                <a href="#" id="nav-link"  class="nav-link">Join Gnet</a>
            </li> 
            
            <li class="nav-item">
                <a class="nav-link" id="nav-link"  href="#">Contact Us</a>
            </li>
            <li class="nav-item"><a href="#" id="nav-link"  class="nav-link">About</a></li>
          </ul>
        </div>  
      </nav>

    <!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">
						<div class="col-sm-7 contact-form" id="form">
							<h2>Get In Touch</h2>
                            <?php
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>"
                            }
					    	if($_GET['success'] == -1) {
                                echo "<div class=\"form-messages error\">Oops something went wrong! Please try again</div>"
                            }
							<div class="form-messages error">
								Oops something went wrong! Please try again
							</div>
							?> 										<form action="" class="form" method="post">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<span class="fa fa-glide-g"></span>
												</span>
												<input type="text" name="Name" placeholder="Your Name (Required)" id="inputSuccess2" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<span class="fa fa-envelope"></span>
												</span>
												<input type="email" name="Email" placeholder="Email (Required)" id="inputError2" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<span class="fa fa-phone"></span>
												</span>
												<label for="Phone"></label>
												<input type="text" name="Phone" placeholder="Phone (Required)" id="inputSuccess2" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" name="Subject" placeholder="Subject" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" rows="6" name="Message" placeholder="Write a message"></textarea>
										</div>
									</div>
								</div>
								<button type="submit" name="send" class="btn form-btn btn-primary" value="0cd60efb5578cd967c3c23894f305800"><span class="fa fa-send"></span> Send Message</button>
							</form>
						</div>
						<div class="col-sm-5">
							<div class="row contact-bg">
								<div class="col-sm-1 contact-icon">
									<span class="fa fa-phone"></span>
								</div>
								<div class="col-sm-11">
									<h6>Phone</h6>
									<p>+234 (0) 9054552223</p>
									<p>+234 (0) 7016480901</p>
									<p>+234 (0) 7064445333</p>
								</div>
							</div>
							<div class="row ">
								<div class="col-sm-1 contact-icon">
									<span class="fa fa-envelope"></span>
								</div>
								<div class="col-sm-11">
									<h6>Email</h6>
									<p><a href="">gnetteq@gmail.com</a></p>
								</div>
							</div>
							<div class="row ">
								<div class="col-sm-1 contact-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="col-sm-11">
									<h6>Contact Lagos Nigeria</h6>
									<p>
										57 Authority Avenue,
										besides Moscow Junior College,
										Off Ile-Iwe Market, 
										Ikotun-Egbe Lagos. 
									</p>
								</div>
							</div>
							<div class="row contact-bg">
								<div class="col-sm-1 contact-icon">
									<span class="fa fa-share-alt"></span>
								</div>
								<div class="col-sm-11">
									<h6>Social Media</h6>
									<ul class="social-links circle animated-effect-1">
										<li class="facebook"><a target="_blank" href=""><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
									
										<li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
										<li class="instagram">
											<a target="_blank" href=""><i class="fa fa-instagram"></i></a>
										</li>
										<li class="youtube">
											<a target="_blank" href=""><i class="fa fa-youtube-play"></i></a>
										</li>
									</ul>		
								</div>
							</div>
						</div>
					</div>
				</div>
            </section>
            
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="courses offset-lg-1 col-lg-3">
                                <h4>Courses</h4>
                            <ul>
                                <li><a href="#">Software Development</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">Desktop Publishing</a></li>
                            </ul>
                        </div>
                        <div class="services col-lg-3">
                                <h4>Services</h4>
                            <ul>
                                <li><a href="#" target="_blank" rel="noopener noreferrer">Corporate Branding</a></li>
                                <li><a href="http://" target="_blank" rel="noopener noreferrer">Website Design</a></li>
                                <li><a href="http://" target="_blank" rel="noopener noreferrer">Blog design and management</a></li>
                            </ul>
                        </div>
                        <div class="contact-us col-lg-4">
                                <h4>Find Us</h4>
                                <ul class="list-icons">
                                    <li>
                                        <i class="fa fa-map-marker pr-10 text-default"></i> 
                                        <p style="display: inline-block;">
                                            57, Authority Avenue, besides Moscow Junior College, Ile-iwe Off Egbe-Ikotun, Lagos State.
                                        </p>
                                    </li>			
                                    <li><i class="fa fa-phone pr-10 text-default"></i> +234 (0) 9054552223</li>
                                    <li><i class="fa fa-phone pr-10 text-default"></i> +234 (0) 07016480901</li>
                                    <li><i class="fa fa-phone pr-10 text-default"></i> +234 (0) 7064445333</li>
                                    <li><a href="#"><i class="fa fa-envelope-o pr-10"></i>gnetteq@gmail.com</a></li>
                                </ul>
                        </div>
                    </div>
                    <p>
                            Copyright &copy; 2018 GNET Technologies. All right reserved!
                    </p>
                </div>
            </footer>

            <script src="gnetteq/lib/jss/jquery.min.js"></script>
            <script src="gnetteq/lib/jss/popper.min.js"></script>
			<script src="gnetteq/lib/jss/bootstrap.min.js"></script>
			<script src="gnetteq/lib/jss/jquery.waypoints.min.js"></script>
</body>
</html>