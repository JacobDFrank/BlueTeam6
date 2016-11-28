<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

    <style>
        #courses {
            background: #FF9800 !important;
        }
        #web {
            background: #FF9800 !important;
            color: white !important;
        }
    </style>

    <section class="container">
        <section class="row" id="personHead">
            <div class="col-md-7 col-xs-12">
                <h1>Web</h1>
                <br />
                <h2>By Jacob Frank</h2>
            </div>
            <div class="col-md-2"></div>
            <img class="col-md-3 col-xs-6" src="../images/jacob.jpg"/>
        </section>
        <section class="row top-buffer well" id="topic">
            <div class="col-md-8">
                <p>About Copy</p>
            </div>
            <div class="col-md-4 col-xs-12 pull-right">
                <div class="row">
                    <a href="tutorial.php" class="btn btn-primary col-sm-12">Tutorial</a>
                </div>
                <div class="row top-buffer">
                    <a href="quiz.php" class="btn btn-primary col-sm-12">Quiz</a>
                </div>
            </div>
        </section>
        <section class="row well top-buffer" id="testimonials">
            <h2>Testimonials</h2>
            <div class="col-md-6">
                <div class="row">
                    <img class="col-md-4" src="../images/personal/Web/testimonial1.jpg" alt="Kevin Harris"/>
                    <div class="col-md-8">
                        <p>Testimonial Statement - Person</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pull-right">
                <div class="row">
                    <img class="col-md-4" src="../images/personal/Web/testimonial2.jpg" alt="Jake Brown"/>
                    <div class="col-md-8">
                        <p>These tutorials are great. They work for both professionals and students. They are easy to follow and I always learn something. - Jake Brown</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="row well" id="strengths">
            <div class="col-md-12">
                <h2>My Strengths and Abilities</h2>
                <p>strengths and abilties copy</p>
            </div>
        </section>
        <section class="row well" id="aboutMe">
            <h2>Who Am I?</h2>
            <p>About me copy</p>
        </section>
    </section>

    <?php include '../footer.php' ?>
</body>
</html>
