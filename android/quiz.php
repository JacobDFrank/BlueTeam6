<!DOCTYPE html>
<html lang="en">
<head>
    <title>Android Quiz</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
<?php include '../header.php' ?>

<div class="container">
<div class= "row">
  <div class="well">
      <section class="row tutorial_content-row">
        <h1 class="col-md-7 col-xs-12 tutorial_header">Quiz Topic</h1>
        <div class="col-md-2"></div> <!-- spacer -->
         <img src="images/andrew.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
      </section>
      <div class="well">
        <p>Question 1</p>
        <form action= "quizsubmission.php" method="post" >
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 2</p>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 3</p>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 4</p>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 5</p>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 6</p>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 7</p>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 8</p>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 9</p>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 4>Option 4</label>
          </div>
        </div>
        <div class="well">
        <p>Question 10</p>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 1>Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 2>Option 2</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 3>Option 3</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 4>Option 4</label>
          </div>
        </div>
          <input type="submit" class="btn btn-lg btn-primary center-block" name="submit" value="Submit"/>
        </form>
      </div>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
