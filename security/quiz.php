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
        <p>Why is security important?</p>
        <form action= "quizsubmission.php" method="post" >
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 1>Stop exfiltration of data/secrets/personal information</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 2>A, C, D</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 3>Gain trust of customers</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 4>Prevent hackers from defacing/changing your systems</label>
          </div>
        </div>
        <div class="well">
        <p>What is SQL injection?</p>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 1>Injecting drugs</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 2>Injecting malicious queries into a website</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 3>Gaining access to the other side</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 4>Dominating a firewall</label>
          </div>
        </div>
        <div class="well">
        <p>What can you do to prevent SQL injection?</p>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 1>Restrict type of input</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 2>Validate your input</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 3>Don’t accept input</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 4>A, B</label>
          </div>
        </div>
        <div class="well">
        <p>What is an example of a page that you can probably inject?</p>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 1>A YouTube video’s page</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 2>A reddit thread</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 3>A login page</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 4>Google Maps</label>
          </div>
        </div>
        <div class="well">
        <p>How does SQL injection work?</p>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 1>It doesn’t</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 2>Magic</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 3>Inject code into a website</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 4>Insert a true statement into a website’s code to exploit a loophole in the code</label>
          </div>
        </div>
        <div class="well">
        <p>What is an example of a true statement?</p>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 1>Username = bob</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 2>1=1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 3>true</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 4>B, C</label>
          </div>
        </div>
        <div class="well">
        <p>SQL Injection allows the attacker to...</p>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 1>Inject code into a website</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 2>Gain access to a site, or information, the attacker otherwise would not have accessed</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 3>Act as the website administrator</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 4>Inject maliciousness into a website</label>
          </div>
        </div>
        <div class="well">
        <p>What is an example of an attack on a website that accepts user input?</p>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 1>Injection attack</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 2>Super user access attack</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 3>Default credential attack</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 4>Button clicking attack</label>
          </div>
        </div>
        <div class="well">
        <p>Why should you validate user input?</p>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 1>Don’t want users to enter unexpected data</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 2>Don’t want users to try and run commands on the server</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 3>Don’t want users to gain special privileges</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 4>A, B, C</label>
          </div>
        </div>
        <div class="well">
        <p>Is there a website which accepts input where you should allow SQL injection?</p>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 1>Yes</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 2>Dad?</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 3>No</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 4>42</label>
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
