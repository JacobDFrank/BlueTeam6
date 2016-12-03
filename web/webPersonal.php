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
                <p>
                  HTML stands for Hyper Text Markup Language and it is what’s known as
                  a markup language as compared to your typical computer programming
                  language that's used to build programs. HTML is really what pieces
                  all the websites together, it’s at least the foundation. It’s the
                  language used to describe what a webpage should look like. HTML uses
                  a series of coded tags – for instance, &lt;p&gt; to start a paragraph and
                    &lt;/p&gt; to end a paragraph. There a bunch of different tags that represent many different things and a website developer or someone who knows HTML professional should know most of them or at least be equipped to use them in any number of situations.

                </p>
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
                    <img class="col-md-4" src="../images/personal/web/testimonial1.png" alt="Jared Ethid"/>
                    <div class="col-md-8">
                        <p>How I first got into HTML and now i’m a front end developer!,
                          definitely a great place to go for beginners - Jared Ethid</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pull-right">
                <div class="row">
                    <img class="col-md-4" src="../images/personal/web/testimonial2.png" alt="Patricia Baker"/>
                    <div class="col-md-8">
                        <p>Great for students and classroom exercises, better
                          than a print out or book sometimes - Patricia Baker</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="row well" id="strengths">
            <div class="col-md-12">
                <h2>My Strengths and Abilities</h2>
                <p>
                  Having developed a handful of websites for people and organizations,
                     I am more than qualified to be an authority on the topics of css
                     and html web development. HTML and CSS are two tools I’m very
                     strong with alongside a passion for teamwork, leadership, and
                     learning I would be a very beneficial member of any team.
                </p>
            </div>
        </section>
        <section class="row well" id="aboutMe">
            <h2>Who Am I?</h2>
            <p>I'm a mostly self-trained developer whose been learning to code since the age of 15.
            I started doing web development around that year and became interested in looking
          at the code of websites ever since. For some reason that's always been more interesting
        to me than anything, something about the immediacy of web development took me. I also became
      interested in design before I got to college but on the way I started looking more into and really enjoyed.
      At college, I realized that despite going there for development I was much more interested in design.
    </p>
        </section>
    </section>

    <?php include '../footer.php' ?>
</body>
</html>
