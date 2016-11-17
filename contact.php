<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Contact</title>
		<?php include 'head.php' ?>
        <meta charset='utf-8' />
<meta name=viewport content='width=device-width, initial-scale=1'>
<!-- Android Chrome Header Color -->
<meta name="theme-color" content="#2196F3">

<!-- Windows 8/10 resources -->
<!--<meta name="msapplication-TileImage" content="images/favicon.png">-->
<meta name="msapplication-TileColor" content="#2196F3">

<!-- favicon -->
<!--<link rel="shortcut icon" href="images/favicon.png" />-->

<!-- style sheets -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/grid.css">
<link rel="stylesheet" href="css/style.css" media="screen">
<link rel="stylesheet" href="css/print.css" media="print">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">

	</head>

	<body>
        <?php include("header.php"); ?>
        <nav class="navbar navbar-fixed-top p-a-9 nav" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand title p-l-12 mobile-hide" href="index.php"><div class="tempHover">Blue Team 6</div></a>
        </div>
        <div id="menu" class="navbar-collapse collapse navbar-inner pull-right drop-down" >
            <span class="x">
            <button type="button" class="navbar-toggle exit" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="close" aria-hidden="true"></i>
            </button>
            </span>
            <ul class="nav navbar-nav navbar-right p-r-9 mobile-center menu-pad">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Java</a></li>
                        <li><a href="#">HTML/CSS</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Computer Security</a></li>
                        <li><a href="#">Database Programming</a></li>
                    </ul>
                </li>
                <li><a href="blogs.php">Blog</a></li>
                <li><a href="workshops.php">Workshops</a></li>
                <li class="text-nowrap"><a href="webinars.php">Webinars</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a class="nav-register menu-pad" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="header-spacer">&nbsp;</div>
<script src="js/nav.js"></script>
            <!-- header end, keep these two lines above -->

 <!--  -->
		<!-- HEADER / SPLASH -->
		<div class="container-fluid about-splash-words contact-splash-words">
			<div class="row">
				<div class="col-md-offset-1 col-lg-4 ">
					<h1 class=" title">Contact</h1>
                    <p class="contact-subheader">Don't hesitate to drop us a line!</p>
				</div>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="row">
                <div class="col-lg-4 ">
                    
                </div>
			</div>
		</div>
     <div class="navOff"></div>

    <div class="container-fluid contact-body-buffer ">
      <div class="row about-margins">
        <div class="col-lg-10 col-md-offset-1 ">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-6 contact-form">
              <form id="contactForm">

                  <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                  </div>

                 <div class="form-group">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your Email" required>
                  </div>

                  <div class="form-group top-buffer ">
                    <textarea class="form-control" id="message" rows="3" placeholder="Your Message" required></textarea>
                  </div>

                  <button type="submit" class="btn contact-btn">Send</button>
                  <div id="msgSubmit" class="text-center hidden">Message Submitted!</div>
              </form>
            </div>
        </div>
      </div>
    </div>
    <script src="js/contactScript.js"></script>

		<?php include 'footer.php' ?>
        <link rel="stylesheet" href="css/footer.css">
<footer class ="">
    <div class="container footer-nav navbar-inner">
    <div class="row">
        <div class="col-sm-10 col-md-offset-1 text-center">
            <div class="col-sm-2 text-nowrap"><a href="index.php">Blue Team 6</a></div>
             <div class="col-sm-2"><a href="sitemap.php">Sitemap</a></div>
             <div class="col-sm-2"><a href="faq.php">FAQ</a></div>
             <div class="col-sm-2"><a href="contact.php">Contact</a></div>
             <div class="col-sm-2"><a href="grading.php">Grading</a></div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="container footer-text">
            <p class="copyright">&copy; 2016 Blue Team 6. All rights reserved.</p>
        </div>
    </div>
</footer>

	</body>
</html>
