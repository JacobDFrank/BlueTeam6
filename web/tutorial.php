<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Tutorial</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

    <section class="container">
        <!-- tutorial header and picture -->
        <section class="row tutorial_content-row">
            <h1 class="col-md-7 col-xs-12 tutorial_header">Tutorial</h1>
            <div class="col-md-2"></div> <!-- spacer -->
            <img src="../images/jacob.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
        </section>
        <!-- topic and quiz link -->
        <section class="row tutorial_content-row">
            <div class="col-md-8 col-xs-12">
                <h2>Web</h2>
                <p>Making A Website</p>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    <a href="personal.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Back to course</a>
                </div>
                <div class="row">
                    <a href="quiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Go to quiz</a>
                </div>
            </div>
        </section>
        </section>
    </section>
    <?php include '../footer.php' ?>
</body>
</html>
