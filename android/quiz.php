<!DOCTYPE html>
<html lang="en">
<head>
    <title>Android Quiz</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
<?php include '../inner-header.php' ?>

<div class="container">
<div class= "row">
  <div class="well">
      <section class="row tutorial_content-row">
        <h1 class="col-md-7 col-xs-12 tutorial_header">Android</h1>
        <div class="col-md-2"></div> <!-- spacer -->
         <img src="../images/ben.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
      </section>
      <div class="well">
        <p>1) Where are colors defined?</p>
        <form action= "quizsubmission.php" method="post" >
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 1>app>src>main>res>values>layouts.xml</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 2>app>src>main>res>values>colors.xml</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 3>app>src>main>res>values>styles.xml</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 4>app>src>main>res>values>resources.xml</label>
          </div>
        </div>

        <div class="well">
        <p>2) Where are styles defined?</p>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 1>app>src>main>res>values>layouts.xml</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 2>app>src>main>res>values>colors.xml</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 3>app>src>main>res>values>styles.xml</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 4>app>src>main>res>values>resources.xml</label>
          </div>
        </div>

        <div class="well">
        <p>3) Where are layout files?</p>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 1>app>src>main>res>layout</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 2>app>src>main>res>xml</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 3>app>src>main>res>drawable</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 4>app>src>main>res>values</label>
          </div>
        </div>

        <div class="well">
        <p>4) What format are layout files in?</p>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 1>HTML</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 2>JSON</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 3>Java</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 4>XML</label>
          </div>
        </div>

        <div class="well">
        <p>5) Where are Java files?</p>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 1>app>src>main>res>layout</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 2>app>src>main>java</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 3>app>src>main>res>xml</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 4>app>src>main>java>[package]</label>
          </div>
        </div>

        <div class="well">
        <p>6) How do you execute an action on a button press?</p>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 1>onClick()</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 2>onPress()</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 3>onTap()</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 4>onAction()</label>
          </div>
        </div>

        <div class="well">
        <p>7) What View can be used to show a list of items?</p>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 1>Array</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 2>ArrayAdapter</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 3>ListView</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 4>ItemView</label>
          </div>
        </div>

        <div class="well">
        <p>8) What attribute defines the minimum Android SDK required by the app?</p>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 1>compileSdkVersion</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 2>buildToolsVersion</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 3>targetSdkVersion</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 4>minSdkVersion</label>
          </div>
        </div>

        <div class="well">
        <p>9) What is used to build the app?</p>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 1>Ant</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 2>Gradle</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 3>JVM</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 4>Proguard</label>
          </div>
        </div>

        <div class="well">
        <p>10) What is the term for a circular action button?</p>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 1>CAB</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 2>FAQ</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 3>FAB</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 4>AB</label>
          </div>
        </div>
          <input type="submit" class="btn btn-lg btn-primary center-block" name="submit" value="Submit"/>
        </form>
      </div>
    </div>
</div>
<?php include '../inner-footer.php' ?>
</body>
</html>
