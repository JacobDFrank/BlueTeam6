<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Quiz</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
<?php include '../inner-header.php' ?>

<div class="container">
<div class= "row">
  <div class="well">
      <section class="row tutorial_content-row">
        <h1 class="col-md-7 col-xs-12 tutorial_header">Web</h1>
        <div class="col-md-2"></div> <!-- spacer -->
         <img src="../images/jacob.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
      </section>
      <div class="well">
        <p>1) In CSS, how would you select all the &lt;p&gt; tags on a page?</p>
        <form action= "quizsubmission.php" method="post" >
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 1>p { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 2>#p { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 3>.p { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio1" value = 4>&lt;p&gt; { }</label>
          </div>
        </div>

        <div class="well">
        <p>2) In CSS, how would you select this image by its id?</p>
        <br>
        <p>&lt;img id="mainpic" src="cat.png"&gt; <br></p>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 1>mainpic { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 2>img { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 3>.mainpic { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio2" value = 4>#mainpic { }</label>
          </div>
        </div>

        <div class="well">
        <p>3) In CSS, how would you select only the paragraphs with class name "warning"?</p>
        <br>
        <p>
          &lt;p class="warning"&gt;
          <br>Don't do it.&lt;/p&gt;
          <br>&lt;p&gt;
          <br>Do it.&lt;/p&gt;
          <br>&lt;p class="warning"&gt;
          <br>Nooo, don't do it.&lt;/p&gt;
        </p>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 1>#warning { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 2>warning { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 3>.warning { }</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio3" value = 4>p.warning { }</label>
          </div>
        </div>

        <div class="well">
        <p>4) In HTML, how would you link to an external style sheet?</p>
        <p>
        </p>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 1>&lt;link rel=“css” href=“styles.css” type=“text/css”&gt;</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 2>&lt;style rel=“stylesheet” href=“styles.css” type=“text/css”&gt;</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 3>&lt;link rel=“stylesheet” href=“styles.css”&gt;</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio4" value = 4>&lt;style rel=“stylesheet” href=“main.css” type=“text/css”&gt;</label>
          </div>
        </div>

        <div class="well">
        <p>5) Which HTML tag is used to define an internal style sheet?</p>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 1>&lt;css&gt;</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 2>&lt;style&gt;</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 3>&lt;script&gt;</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio5" value = 4>&lt;internal&gt;</label>
          </div>
        </div>

        <div class="well">
        <p>6) In CSS, what does this property do to the element it is assigned to?
          <br>
          color: red;
        </p>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 1>Changes the background color of the element</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 2>Changes the text color of the element</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 3>Changes the color of everything inside the element and nested in it</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio6" value = 4>Changes the under line color</label>
          </div>
        </div>

        <div class="well">
        <p>7) What does CSS stand for?</p>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 1> Colorful Style Sheets</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 2>Creative Style Sheets</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 3>Cascading Style Sheets</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio7" value = 4>Computer Style Sheets</label>
          </div>
        </div>

        <div class="well">
        <p>8) Where in an HTML document is the correct place to refer to an external style sheet?</p>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 1>At the end of the document</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 2> In the &lt;head&gt; section In the &lt;body&gt; section</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 3> In the &lt;body&gt; section</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio8" value = 4>In the &lt;footer&gt; section</label>
          </div>
        </div>

        <div class="well">
        <p>9) How do you insert a comment in a CSS file?</p>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 1>// this is a comment</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 2> ' this is a comment</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 3> // this is a comment //</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio9" value = 4> /* this is a comment */</label>
          </div>
        </div>

        <div class="well">
        <p>10) Which property is used to change the background of the color?</p>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 1>color</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 2>bgcolor</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 3>background-color</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio10" value = 4>color-background</label>
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
