<!DOCTYPE html>
<html lang="en">
<head>
    <title>Topic Goes Here</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

    <style>
        #courses {
            background: #FF9800 !important;
        }
        #SUBJECT {
            background: #FF9800 !important;
            color: white !important;
        }
    </style>

    <section class="container">
        <section class="row" id="personHead">
            <div class="col-md-7 col-xs-12">
                <h1>Person Page/Topic</h1>
                <br />
                <h2>By First Last</h2>
            </div>
            <div class="col-md-2"></div>
            <img class="col-md-3 col-xs-6" src="images/ryan.png"/>
        </section>
        <section class="row top-buffer well" id="topic">
            <div class="col-md-8">
                <p>This is how you topic. Here is what topic is. I am good at topic.</p>
            </div>
            <div class="col-md-4 col-xs-12 pull-right">
                <div class="row">
                    <a href="" class="btn btn-primary col-sm-12">Tutorial</a>
                </div>
                <div class="row top-buffer">
                    <a href="" class="btn btn-primary col-sm-12">Quiz</a>
                </div>
            </div>
        </section>
        <section class="row well top-buffer" id="testimonials">
            <h2>Testimonials</h2>
            <div class="col-md-6">
                <div class="row">
                    <img class="col-md-4" src="" alt=""/>
                    <div class="col-md-8">
                        <p>Testimonial uno.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pull-right">
                <div class="row">
                    <img class="col-md-4" src="" alt=""/>
                    <div class="col-md-8">
                        <p>Testimonial dos.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="row well" id="strengths">
            <div class="col-md-12">
                <h2>My Strengths and Abilities</h2>
                <p></p>
            </div>
        </section>
        <section class="row well" id="aboutMe">
            <h2>Whoami?</h2>
            <p>I am a person.</p>
        </section>
    </section>

    <?php include '../inner-footer.php' ?>
</body>
</html>
