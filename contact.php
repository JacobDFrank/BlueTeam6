<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Contact</title>
		<?php include 'head.php' ?>

	</head>

	<body>
        <?php include("header.php"); ?>
 <!--  -->
		<!-- HEADER / SPLASH -->
		<div class="container-fluid about-splash-words contact-splash-words">
            <div class="row">
                <div class="col-md-offset-1 col-lg-4 ">
                    <h1 class=" title">Contact</h1>
                    <p class="contact-subheader">Don't hesitate to drop us a line!</p>
                </div>
            </div>
		</div>
    <div class="container-fluid">
      <div class="row">
        <div class="container-fluid contact-body-buffer ">
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
    </div>
    <script src="js/contactScript.js"></script>

    <?php include 'footer.php' ?>
	</body>
</html>
