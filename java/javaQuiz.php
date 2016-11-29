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
        <h1 class="col-md-7 col-xs-12 tutorial_header">Quiz on: Java Programming</h1>
        <section class="col-md-2"></section> <!-- spacer -->
         <img src="../images/andrew.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
      </section>
      <section class="well">
        <p>Java is a _______ Oriented Programming Language?</p>
        <form action= "javaQuizSubmission.php" method="post" >
          <section class="radio">
            <label><input type="radio" name="optradio1" value = 1 checked="true">Class</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio1" value = 2>Coffee</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio1" value = 3>Mobile</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio1" value = 4>Object</label>
          </section>
        </section>
        <section class="well">
        <p>Java was created by James Gosling and released by Sun Microsystems in 1995</p>
          <section class="radio">
            <label><input type="radio" name="optradio2" value = 1 checked="true">True</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio2" value = 2>False</label>
          </section>
        </section>
        <section class="well">
        <p>Which of the following devices does NOT run Java? </p>
          <section class="radio">
            <label><input type="radio" name="optradio3" value = 1 checked="true">Blu-Ray Players</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio3" value = 2>iPhones</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio3" value = 3>Android Phones</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio3" value = 4>ATM's</label>
          </section>
        </section>
        <section class="well">
        <p>Java tutorials are the most searched programming tutorials on Google</p>
          <section class="radio">
            <label><input type="radio" name="optradio4" value = 1 checked="true">True</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio4" value = 2>False</label>
          </section>
        </section>
        <section class="well">
        <p>Who can access private variables?</p>
          <section class="radio">
            <label><input type="radio" name="optradio5" value = 1 checked="true">Any program on the internet</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio5" value = 2>Only the class that they are in</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio5" value = 3>Classes in the same project</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio5" value = 4>Anyone</label>
          </section>
        </section>
        <section class="well">
        <p>Global Variables are accessible are available for the entire program’s run</p>
          <section class="radio">
            <label><input type="radio" name="optradio6" value = 1 checked="true">True</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio6" value = 2>False</label>
          </section>
        </section>
        <section class="well">
        <p>If you were to choose a data type that could hold a number with many numbers to the right of a decimal point, which would you choose?</p>
          <section class="radio">
            <label><input type="radio" name="optradio7" value = 1 checked="true">Int</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio7" value = 2>String</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio7" value = 3>Double</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio7" value = 4>Char</label>
          </section>
        </section>
        <section class="well">
        <p>A Constructor MUST be named the same as the class that it is in.</p>
          <section class="radio">
            <label><input type="radio" name="optradio8" value = 1 checked="true">True</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio8" value = 2>False</label>
          </section>
        </section>
        <section class="well">
        <p>Which method is known as the heart of a java program?</p>
          <section class="radio">
            <label><input type="radio" name="optradio9" value = 1 checked="true">actionPerformed</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio9" value = 2>main</label>
          </section>
          <section class="radio">
            <label><input type="radio" name="optradio9" value = 3>Constructor</label>
          </section>
        </section>
        <section class="well">
        <p>JPanels are containers?</p>
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
