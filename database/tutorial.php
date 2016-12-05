<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database Tutorial</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

    <section class="container">
        <!-- tutorial header and picture -->
        <section class="row tutorial_content-row">
            <h1 class="col-md-7 col-xs-12 tutorial_header">Tutorial</h1>
            <div class="col-md-2"></div> <!-- spacer -->
            <img src="../images/jesus.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
        </section>

        <!-- topic and quiz link -->
        <section class="row tutorial_content-row">
            <div class="col-md-8 col-xs-12">
                <h2>Database</h2>
                <p>Creating the Database</p>
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

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 1</h2>
                    <p>Today we are going to construct a simple database using MySQL. So first things first if you don't already have MySQL downloaded onto your machine just click on this link and you will be taken to the MySQL website along with a download link. https://dev.mysql.com/downloads/windows/installer/5.7.html. Once MySQL is installed onto your machine open up the MySQL command line and enter with your created username and password. We can create the database directly using the command line however this can be very confusing as it is hard to keep track of what was already created. We are going to write a script with all the commands that can be run on the MySQL command line and from there we can fix any errors that come up simply by fixing them in the script.</p>
                </div>
            </section>
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 2</h2>
                    <p>
                        We will create a database that holds the information of students that attend a university. In it we will store their basic information such as name, DOB, id, etc. Open  your favorite text editor and we can begin. Save your file as LastName_Database.sql This will let the command line know it will running a script. For the first three lines you will type in the following:
                        <br>
                        <code>
                        DROP DATABASE IF EXISTS school;
                        create database school;
                        use school;
                        </code>
                        <br>
                        If for any reason there are problems in your script that MySQL catches the first line will delete the database completely if one already exists so that you can start fresh and not have to worry about errors about a database having already being created each time you run your script when debugging. The second line creates the database itself and specifies that we are going to use it in the following line.
                    </p>
                </div>
            </section>
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 3</h2>
                    <p>
                        Next, we are going to create a table which is where all information will be stored:
                        <br>
                        <code>
                        create table student (
                        id          int(10) NOT NULL,           
                        first_name  varchar(30) NOT NULL,
                        last_name       varchar(30) NOT NULL,
                        address         varchar(30),
                        city            varchar(30),
                        statecode       char(2) not null,
                        zipcode         int(5),
                        dob     date()
                        constraint school_pk PRIMARY KEY (id));
                        </code>
                        <br>
                        In this table we have created fields that will take in a first and last name along with an address and city that can fit 30 character each. Notice that dob and zipcode expect a date format and an input of 5 integers. Also id, both names, and statecode must have values otherwise MySQL will not be pleased. In the very last line we are making id or Primary Key, what this means is this is what uniquely define all rows in our table from other inputs. Once you have you database created you can run the script by going into the MySQL command line typing in source and dragging the file onto wherever you have it saved onto the command line. Hit Enter and your database should be created.
                    </p>
                </div>
            </section>
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 4</h2>
                    <p>
                        Now that we have our database created we can now insert data into our student table. To do this we will create a new file called insert.sql. In this file we will simply add:
                        <br>
                        <code>
                        INSERT INTO school VALUES( 1111111111, 'John',  'Doe',  '123 Main St', 'Rochester', 'NY', 14623, 1996-04-20);
                        INSERT INTO school VALUES( 2222222222, 'Jane',  'Doe',  '456 Main St', 'Rochester', 'NY', 14623, 1996-06-12);
                        </code>
                        <br>
                        Save your file and run the script.
                    </p>
                </div>
            </section>
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 5</h2>
                    <p>
                        So now that we have our database created with tables and inserted our data, how will we know if the data is there or not? Typing into our command line:
                        <br>
                        <code>
                            SELECT * FROM student;
                        </code>
                        <br>
                        And there you go! Congratulations you've created your first database! Go ahead and try adding in your own data unto the insert.sql 
                    </p>
                </div>
            </section>
        </section>
    </section>
    <?php include '../inner-footer.php' ?>
</body>
</html>