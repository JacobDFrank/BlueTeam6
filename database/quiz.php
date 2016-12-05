<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

<section class="container">
<section class= "row">
  <section class="well">
      <section class="row tutorial_content-row">
        <h1 class="col-md-7 col-xs-12 tutorial_header">Quiz on: Database Programming</h1>
        <section class="col-md-2"></section> <!-- spacer -->
         <img src="../images/jesus.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
      </section>
      <section class="well">
        <p>What is the purpose of a database?</p>
        <form action= "quizSubmission.php" method="post" >
          <section class="radio">
            <label><input type="radio" name="optradio1" value = 1 checked="true">Store Data</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio1" value = 2>Organize data</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio1" value = 3>Both A and B</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio1" value = 4>Creating lists of data</label>
          </section>
        </section>
        <section class="well">
        <p>What does SQL stand for?</p>
          <section class="radio">
            <label><input type="radio" name="optradio2" value = 1 checked="true">Structured Query Language</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio2" value = 2>Structured Quest Language</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio2" value = 3>Static Query Lab</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio2" value = 4>Structured Query Layer</label>
          </section>
        </section>
        <section class="well">
        <p>What command creates a database?</p>
          <section class="radio">
            <label><input type="radio" name="optradio3" value = 1 checked="true"> new Database </label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio3" value = 2>new data </label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio3" value = 3> create database </label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio3" value = 4>create data</label>
          </section>
        </section>
        <section class="well">
        <p>What command creates a new table in the database?</p>
          <section class="radio">
            <label><input type="radio" name="optradio4" value = 1 checked="true"> new table </label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio4" value = 2>create new</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio4" value = 3 checked="true">create database table</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio4" value = 4 checked="true">create table</label>
          </section>
        </section>
        <section class="well">
        <p>What is the purpose of the primary key?</p>
          <section class="radio">
            <label><input type="radio" name="optradio5" value = 1 checked="true"> used to unlock data</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio5" value = 2>unique row identifier</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio5" value = 3>unique column identifier</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio5" value = 4>Anyone</label>
          </section>
        </section>
        <section class="well">
        <p>Write a query that creates a table called new with that accepts an int id and makes it the primary key.</p>
          <section class="radio">
            <label><input type="radio" name="optradio6" value = 1 checked="true">CREATE table new(id int() Primary Key);</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio6" value = 2>CREATE table new(id int() Key);</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio6" value = 3 checked="true"> MAKE table new(int() Primary Key);</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio6" value = 4 checked="true">CREATE table new(Primary Key);</label>
          </section>
        </section>
        <section class="well">
        <p>Which command is used to select your database?</p>
          <section class="radio">
            <label><input type="radio" name="optradio7" value = 1 checked="true">Select</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio7" value = 2>Change</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio7" value = 3>Pick</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio7" value = 4>Use</label>
          </section>
        </section>
        <section class="well">
        <p>Which command selects all row from a table?</p>
          <section class="radio">
            <label><input type="radio" name="optradio8" value = 1 checked="true">Select all rows</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio8" value = 2>Select row # of row</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio8" value = 3>Select * from</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio8" value = 4>Choose row all</label>
          </section>
        </section>
        <section class="well">
        <p>How would you specify a field that takes a person's name with a limit of 30 characters?</p>
          <section class="radio">
            <label><input type="radio" name="optradio9" value = 1 checked="true">name varchar(30)</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio9" value = 2>name char(30)</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio9" value = 3>name string(30)</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio9" value = 4>name word(30)</label>
          </section>
        </section>
        <section class="well">
        <p>Databases can be implemented into web pages</p>
          <section class="radio">
            <label><input type="radio" name="optradio10" value = 1 checked="true">True</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio10" value = 2>False</label>
          </section>
        </section>
          <input type="submit" class="btn btn-lg btn-primary center-block" name="submit" value="Submit"/>
        </form>
      </section>
    </section>
</section>
<?php include '../inner-footer.php' ?>
</body>
</html>