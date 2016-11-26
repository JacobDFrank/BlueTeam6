<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ryan on Security: Quiz</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

<div class="container">
<div class= "row">
  <div class="well">
      <section class="row tutorial_content-row">
        <h1 class="col-md-7 col-xs-12 tutorial_header">SQL Injection Quiz</h1>
        <div class="col-md-2"></div> <!-- spacer -->
         <img src="../images/ryan.png" alt="Picture of author" class="col-md-3 col-xs-6">
      </section>
      <div class="well">
        <p>1) Why is security important?</p>
        <form action= "./quizsubmission.php" method="post" >
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 1>A. Stop exfiltration of data/secrets/personal information</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 2>B. A, C, D</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 3>C. Gain trust of customers</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 4>D. Prevent hackers from defacing/changing your systems</label>
          </div>
        </div>
        <div class="well">
        <p>2) What is SQL injection?</p>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 1>A. Injecting drugs</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 2>B. Injecting malicious queries into a website</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 3>C. Gaining access to the other side</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 4>D. Dominating a firewall</label>
          </div>
        </div>
        <div class="well">
        <p>3) What can you do to prevent SQL injection?</p>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 1>A. Restrict type of input</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 2>B. Validate your input</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 3>C. Don’t accept input</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 4>D. A, B</label>
          </div>
        </div>
        <div class="well">
        <p>4) What is an example of a page that you can probably inject?</p>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 1>A. A YouTube video’s page</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 2>B. A reddit thread</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 3>C. A login page</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 4>D. Google Maps</label>
          </div>
        </div>
        <div class="well">
        <p>5) How does SQL injection work?</p>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 1>A. It doesn’t</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 2>B. Magic</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 3>C. Inject code into a website</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 4>D. Insert a true statement into a website’s code to exploit a loophole in the code</label>
          </div>
        </div>
        <div class="well">
        <p>6) What is an example of a true statement?</p>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 1>A. Username = bob</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 2>B. 1=1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 3>C. true</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 4>D. B, C</label>
          </div>
        </div>
        <div class="well">
        <p>7) SQL Injection allows the attacker to...</p>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 1>A. Inject code into a website</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 2>B. Gain access to a site, or information, the attacker otherwise would not have accessed</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 3>C. Act as the website administrator</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 4>D. Inject maliciousness into a website</label>
          </div>
        </div>
        <div class="well">
        <p>8) What is an example of an attack on a website that accepts user input?</p>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 1>A. Injection attack</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 2>B. Super user access attack</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 3>C. Default credential attack</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 4>D. Button clicking attack</label>
          </div>
        </div>
        <div class="well">
        <p>9) Why should you validate user input?</p>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 1>A. Don’t want users to enter unexpected data</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 2>B. Don’t want users to try and run commands on the server</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 3>C. Don’t want users to gain special privileges</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 4>D. A, B, C</label>
          </div>
        </div>
        <div class="well">
        <p>10) Is there a website which accepts input where you should allow SQL injection?</p>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 1>A. Yes</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 2>B. Dad?</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 3>C. No</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 4>D. 42</label>
          </div>
        </div>
          <input type="submit" class="btn btn-lg btn-primary center-block" name="submit" value="Submit"/>
        </form>
      </div>
    </div>
</div>
<?php include '../footer.php' ?>
</body>
</html>
