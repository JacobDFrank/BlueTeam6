<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ryan on Security: Tutorial</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
<?php include '../inner-header.php' ?>

    <section class="container">
        <!-- tutorial header and picture -->
        <section class="row tutorial_content-row">
            <h1 class="col-md-7 col-xs-12 tutorial_header">Security Tutorial</h1>
            <div class="col-md-2"></div> <!-- spacer -->
            <img src="../images/ryan.png" alt="Picture of author" class="col-md-3 col-xs-6">
        </section>

        <!-- topic and quiz link -->
        <section class="row tutorial_content-row">
            <div class="col-md-8 col-xs-12">
                <h2>SQL Injection</h2>
                <p>An informative guide for beginners on how SQL Injection works.</p><br />
                <h4><strong>DISCLAIMER: Everything you are about to learn can be used in a malicious manner. Do not exploit another person’s property unless you have written consent.</strong></h4>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    <a href="./personal.php#topic" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Back to course</a>
                </div>
                <div class="row">
                    <a href="./quiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Go to quiz</a>
                </div>
            </div>
        </section>

        <section class="well">
            <!-- content left, picture right -->
            <section class="row tutorial_content-row well">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h2>Introduction to SQL Injection</h2>
                        <p>SQL injection (SQLi) is the act of injecting ‘malicious’ queries into a website’s SQL command. Typically, this can be found when trying to log into a service. The company will have a database (possibly of MySQL, SQL or another database) that contains their users’ information. So when you try to log in they will query the database and check to see if the password and username you entered are in the database. If they are in the database, they log you in. It does not sound too bad right now. Okay so I can probably use SQL injection to log in as myself without a password. That’s pretty bad but there could be worse.</p>
                        <p>Well, there is worse. Not only can SQL injection let you log in without a password, it can even let you log in without a username. It can even let you execute more SQL statements in addition to the one the page sends to log you in. This is how data can get stolen from your user database.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <p>So we know a little bit about what SQL injection can allow us to do but, how do we do it and how does it work? Most websites used to have code that looked like the code to the right. With this code, you can see that they take your input and just shove it into their SQL query without checking what is in the input. This allows the user to enter more than just the username. The goal with your SQL query is to make the query true. You want it to be true. So where it checks for the username (...where username like $username ….) you want it to be true. So one example is pass the website the username of (do not include the double quotes) “‘ OR 1=1’” since 1=1 is always true. This logs you into the service since it is a true statement. It allows you, someone who might not know a username, to login with the highest authority. You knew no one’s login information before but now you know everyone’s.</p>
                    </div>
                    <img src="../images/tutorials/security/php_code.PNG" alt="Step picture" class="top-buffer col-md-6 col-xs-12">
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <p>That is how SQL injection works! Remember, the goal with SQL injection is to make the system believe we have special rights when we really might have nothing. It is a way to get into a system and find more data than you were originally supposed to see. <strong>Again, do not attack someone’s server unless you were have written permission.</strong></p>
                        <p>If you want to learn and try how to actually execute SQL injection follow my tutorial bellow and either install and setup the server or navigate to this <a href="https://www.codebashing.com/sql_demo" target="_blank">SQL Injection test page</a>.</p>
                    </div>
                </div>
            </section>

            <!-- picture left, content right -->
            <section class="row tutorial_content-row well">
                <img src="../images/tutorials/security/programming.jpg" alt="Step picture" class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <h2>Step 1: Gather the Propper Supplies</h2>
                    <p>For this step, either navigate to the link above (skip to <a href="#step3">step 3</a>) or setup your own LAMP server (Linux, Apache, MySQL and PHP). If you choose to setup your own LAMP server, configuring it is not too hard as I have a SQL Injection demo on my GitHub that comes with a script you can use to setup the database and all.</p>
                    <ul>
                        <li>For Debian and Ubuntu based Linux: <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-14-04" target="_blank">Debian Guide to LAMP Stack</a></li>
                        <li>For CentOS and other Red Hat Enterprise Linux Distros: <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-centos-6" target="_blank">RHEL Guide to LAMP Stack</a></li>
                    </ul>
                    <p>Do note that you do not need to follow the tutorial all the way through. Like I said, I have a demo on my GitHub you can use as your injectable page. The key here is to install all the components and start them.</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 2: Set up the Server</h2>
                    <p>Now that you have everything installed, it is time to setup your server. An easy way to do this is to pull the <a href="https://github.com/rmsidebottom/Demos" target="_blank">SQL Injection demo</a> from my personal GitHub. Pull, or move, this directory into your <code>/var/www/</code> or <code>/var/www/html</code> directory (depending on OS version). Once the files are there, edit the <code>setup.sh</code> script and the php file with your SQL username and password. Once you do this, run the script, move or delete it (we don't want others to find your database password and user name), and restart your web server.</p>
                </div>
            </section>
            
            <section class="row tutorial_content-row well" id="step3">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Step 3: Prepare for SQL Injection</h2>
                        <p>Once you have your environment set up, you are ready to start practicing SQL injection. Before we start, it is good to know what indicators can reveal a page's security. A pretty basic indicator is the address bar. If you see a page that ends in PHP, you know that the page is going to be processing your input. This doesn't mean that the page is vulnerable to SQL injection but it is more likely since you see this. Another indicator, an even better indicator, is if you enter funny (wrong, incorrect for the server) and it spits out  a SQL error. This means that the server does not validate your input at all.</p>
                    </div>
                </div>
            </section>
            
            <section class="row tutorial_content-row well">
                <div class="row">
                    <img src="../images/tutorials/security/simple_web_form.PNG" alt="Web form" class="col-md-6 col-xs-12"/>
                    <div class="col-md-6 col-xs-12">
                        <h2>Step 4: Plan SQL Statement</h2>
                        <p>Before you actually inject the page, you need to quickly examine it. As you can see, the page I created is a simple login form. This is where you will be inputting your SQL code. Remember, the goal is to make the backend of the program run code that is different from what was intended. By looking at the input available to you, on my page there is a field for a username and one for a password, you know how to modify your input.</p>
                    </div>
                </div>
            </section>
            
            <section class="row tutorial_content-row well">
                <div class="col-md-6 col-xs-12">
                    <h2>Step 5: Injection</h2>
                    <p>Now you are ready to start injecting the page. Remember, for this part you want to enter a true statement (1=1 is always true) into one of the fields. You also want look above at the PHP code and see what else you need to include in your input to properly inject the page. An example of what you could input is to the right.</p>
                </div>
                <img src="../images/tutorials/security/sql_injection.PNG" alt="Sample Input" class="col-md-6 col-xs-12 left-buffer" id="injection"/>
            </section>
            
            <section class="row tutorial_content-row well">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h2>Step 6: The Result</h2>
                        <p>Once you have successfully injected the page, you should have access to more of the page. My site yields the information of all the users in the database. Some pages will let you in as the Administrator and others will return more from the database. Pending on your input, there are ways to force the page to do one of the two but, the page has to allow it. For instance, all you can get from my test page is information from the SQL database. There just isn't more my page is programmed to do.</p>
                    </div>
                    <img src="../images/tutorials/security/page_result.PNG" alt="Sample Input" class="col-md-6 col-xs-12"/>
                </div>
                <div class="row top-buffer">
                    <img src="../images/tutorials/security/sql_result.PNG" alt="SQL Result" class="col-md-6 col-xs-12"/>
                    <div class="col-md-6 col-xs-12">
                        <p>My page also displays the resultant SQL code. After injection the statement the databse receives is much different than what the PHP code up above looks to be sending. Once you understand how the SQL code is manipulated, you can begin to string together multiple commands which will then allow you to see more information in the database.</p>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <?php include '../footer.php' ?>
</body>
</html>