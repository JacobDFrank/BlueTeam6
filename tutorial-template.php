<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

    <section class="container">
        <!-- tutorial header and picture -->
        <section class="row tutorial_content-row">
            <h1 class="col-md-7 col-xs-12 tutorial_header">Tutorial</h1>
            <div class="col-md-2"></div> <!-- spacer -->
            <img src="images/me.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
        </section>

        <!-- topic and quiz link -->
        <section class="row tutorial_content-row">
            <div class="col-md-8 col-xs-12">
                <h2>Topic</h2>
                <p>Description</p>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    <a href="quiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Back to course</a>
                </div>
                <div class="row">
                    <a href="quiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Go to quiz</a>
                </div>
            </div>
        </section>

        <section class="well">
            <!-- content left, picture right -->
            <section class="row tutorial_content-row well">
                <div class="col-md-6 col-xs-12">
                    <h2>Step n</h2>
                    <p>Description</p>
                </div>
                <img src="images/tutorials/topic/step.jpg" alt="Step picture" class="col-md-6 col-xs-12">
            </section>

            <!-- picture left, content right -->
            <section class="row tutorial_content-row well">
                <img src="images/tutorials/topic/step.jpg" alt="Step picture" class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <h2>Step n</h2>
                    <p>Description</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step n</h2>
                    <p>Description</p>
                </div>
            </section>
        </section>
    </section>
    <?php include 'footer.php' ?>
</body>
</html>