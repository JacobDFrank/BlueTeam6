<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blue Team 6 - Home</title>
    <?php include 'head.php' ?>
</head>
<body>
<?php include 'header.php' ?>

<section class="container">
    <!-- logo -->
    <section class="row">
        <div class="col-md-2 col-sm-1"></div>
        <img src="images/us.jpg" alt="Team logo" class="col-md-8 col-sm-10 col-xs-12">
        <div class="col-md-2 col-sm-1"></div>
    </section>

    <!-- title and subheader -->
    <section class="row">
        <div class="homepage_column col-md-5"></div>
        <div class="homepage_column col-md-7"></div> <!-- spacer -->
    </section>

    <!-- about us -->
    <section class="row">
        <div class="homepage_column col-md-4"></div> <!-- spacer -->
        <div class="homepage_column col-md-8 well">
            <h3>About us</h3>
            <h4 class="homepage_section-heading">Who We Are:</h4>
            <p class="homepage_section-paragraph">We are a group of students from the Rochester Institute of Technology. Ranging from Sophomores to Juniors, among us- we have over 10 years of technical expertise. Using knowledge from school as well as knowledge from our own personal experiences, we can solve nearly any technical issue that you may have.</p>

            <h4 class="homepage_section-heading">Are you ready to learn?</h4>
            <p class="homepage_section-paragraph">Are you ready to gain some hands on experience? You have come to the right place. Our professionals have developed in depth tutorials- designed for a common user, we are confident that you will leave with an aura of confidence in the field(s) that you have chosen.We currently have tutorials in mySQL, Java, Android dev, HTML/CSS, and computer security. Select one and further your education today.</p>

            <h4 class="homepage_section-heading">What you need?</h4>
            <p class="homepage_section-paragraph">For many of these tutorials- you may need to download a program or two to run the code and follow along. Our staff has done extensive research on the software that we recommend to you and assure that it is safe to install as well as simple to use.’</p>

            <h4 class="homepage_section-heading">WE want YOU to learn.</h4>
            <p class="homepage_section-paragraph">We believe that anyone can learn to program or how to system test. That is why we are 100% confident that by the end of our tutorials, you will be highly knowledgeable in that given field.</p>
        </div>
    </section>

    <!-- purpose -->
    <section class="row">
        <div class="homepage_column well">
            <h3 class="centered">Purpose</h3>
            <p class="homepage_section-paragraph">The purpose of this website is to inform our users of the diverse programs and skillsets that available today. We believe that users will proactively want to learn the information that we have prepared in order to get ahead in today's competitive world. Our team has prepared Tutorials, Workshops, Quizzes, and Blogs in order to gage the user’s interest as much as possible. We believe that in order for the user to want to learn, the information must be provided to them in a way that retains their attention for the longest possible time. In order to connect to our users, we have established a blog post as well as a newsletter so that our active users will have a way to continue to use our site to learn as well as following us in our personal lives.</p>
        </div>
    </section>

    <!-- newsletter -->
    <section class="row">
        <div class="homepage_column col-md-10 well">
            <h3>Newsletter</h3>
            <h4 class="homepage_section-heading">Hello readers:</h4>
            <p class="homepage_section-paragraph">Welcome to our first newsletter. We are excited to bring you the latest from Blue Team 6. Remember to check your email and configure your spam folder so you never miss anything. </p>
            <p class="homepage_section-paragraph">Upcoming workshops are: </p>
            <section class="homepage_newsletter-table">
                <div class="homepage_newsletter-tr-heading">
                    <div>Workshop</div>
                    <div>Date</div>
                    <div>Time</div>
                </div>
                <div>
                    <div>Ben - Android Separation of Resources</div>
                    <div>February 7, 2017</div>
                    <div>11:30AM</div>
                </div>
                <div>
                    <div>Ryan - Working of a Firewall For You</div>
                    <div>February 9, 2017</div>
                    <div>12:15PM</div>
                </div>
                <div>
                    <div>Andrew- Java for dummies</div>
                    <div>February 14, 2017</div>
                    <div>2:30PM</div>
                </div>
            </section>
            <p class="homepage_section-paragraph">Upcoming webinars are: </p>
            <section class="homepage_newsletter-table">
                <div class="homepage_newsletter-tr-heading">
                    <div>Webinar</div>
                    <div>Date</div>
                </div>
                <div>
                    <div>Using java to connect to a database</div>
                    <div>December 20, 2016</div>
                </div>
                <div>
                    <div>Checking the Security of YOUR Servers</div>
                    <div>December 21, 2016</div>
                </div>
                <div>
                    <div>Preparing for Java 9</div>
                    <div>December 22, 2016</div>
                </div>
            </section>
            <p class="homepage_section-paragraph">Featured blogs this week are:</p>
            <section class="homepage_newsletter-table">
                <div>
                    <div><a href="blogs.php#database1">Database - Strict Mode</a></div>
                </div>
                <div>
                    <div><a href="blogs.php#android1">Android - Split Screen in Android Nougat</a></div>
                </div>
                <div>
                    <div><a href="blogs.php#java1">Java - Lambda Expressions</a></div>
                </div>
            </section>
        </div>
        <div class="homepage_column col-md-2"></div> <!-- spacer -->
    </section>
</section>

<?php include 'footer.php' ?>
</body>
</html>
