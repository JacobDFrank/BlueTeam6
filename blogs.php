<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Blogs</title>
		<?php include 'head.php' ?>
	</head>
	<body>
		<?php include 'header.php' ?>

		<section class="container">
			<section class="row">
				<!--SPLASH, image?, banner?-->
				<img src="images/blogs/blog.png" alt="Blog">
			</section>
			<section class="row well">
				<div>
					<h1>Blog</h1>
				</div>
			</section>

			<!--Blogs-->
			<section>
                <!--BLOG POST 1-->
                <section class="row well">
                    <!--Blog Heading-->
                    <div class="row">
                        <h2>Blog Title</h2>
                    </div>
                    <!--Blog Post itself-->
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Blog numero uno.
                            </p>
                        </div>
                    </div>
                </section>

                <!--BLOG POST 2-->
                <section class="row well">
                    <!--Blog Heading-->
                    <div class="row">
                        <h2>Blog 2 Title</h2>
                    </div>
                    <!--Blog Post itself-->
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Blog numero dos.
                            </p>
                        </div>
                    </div>
                </section>
            </section>
		</section>

		<?php include 'footer.php' ?>
	</body>
</html>
