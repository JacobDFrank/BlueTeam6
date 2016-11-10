<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial</title>
    <?php include 'head.php' ?>
</head>
<body>
<?php include 'header.php' ?>

    <!-- this inline style is just a temp fix for nav bar not taking space -->
    <section class="container" style="margin-top: 40px; margin-bottom: 250px;">
        <!-- tutorial header and picture -->
        <section class="row tutorial_content-row">
            <h1 class="col-md-7 col-xs-12">Tutorial</h1>
            <div class="col-md-2"></div> <!-- spacer -->
            <img src="images/me.jpg" alt="Picture of author" class="col-md-3 col-xs-12">
        </section>

        <!-- topic and quiz link -->
        <section class="row tutorial_content-row">
            <div class="col-md-8 col-xs-12">
                <h2>Topic</h2>
                <p>Description</p>
            </div>
            <a href="quiz.php" class="btn btn-primary col-md-4 col-xs-12">Go to quiz</a>
        </section>

        <!-- content left, picture right -->
        <section class="row tutorial_content-row">
            <div class="col-md-6 col-xs-12">
                <h2>Step n</h2>
                <p>Description</p>
            </div>
            <img src="images/topic/step.jpg" alt="Step picture" class="col-md-6 col-xs-12">
        </section>

        <!-- picture left, content right -->
        <section class="row tutorial_content-row">
            <img src="images/topic/step.jpg" alt="Step picture" class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">
                <h2>Step n</h2>
                <p>Description</p>
            </div>
        </section>

        <!-- full content -->
        <section class="row tutorial_content-row">
            <div class="col-xs-12">
                <h2>Step n</h2>
                <p>Description</p>
            </div>
        </section>
    </section>

    <?php include 'footer.php' ?>
</body>
</html>