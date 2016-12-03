<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Tutorial</title>
    <?php include '../inner-head.php' ?>
</head>

<body>
    <?php include '../inner-header.php' ?>

    <section class="container">
        <!-- tutorial header and picture -->
        <section class="row tutorial_content-row">
            <h1 class="col-md-7 col-xs-12 tutorial_header">Tutorial</h1>
            <div class="col-md-2"></div>
            <!-- spacer -->
            <img src="../images/jacob.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
        </section>
        <!-- topic and quiz link -->
        <section class="row tutorial_content-row">
            <div class="col-md-8 col-xs-12">
                <h2>Web</h2>
                <p>Making A Website</p>
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

        <section class="well">
            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 1</h2>
                    <p>Use a text editor or an IDE; something like textedit or notepad will do just fine but using something like Brackets or Atom with a Live preview feature is so much more helpful. For this tutorial however you can use anything and just
                        save the right file type and open it up in any web browser of sorts.</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 2</h2>
                    <p>
                        For this tutorial I’ll be using the text editor known as atom
                        <br> The first thing you should do is make a folder called website and this is where we are going to put everything we’re going to work on.
                        <br> Here’s the basic structure of an html webpage:
                        <br>
                        <code>
                      &lt;html&gt;
                      <br>
                      &lt;header&gt;
                        <br>
                      &nbsp; &lt;title&gt;Test!&lt;/title&gt;
                      <br>
                      &lt;/header&gt;
                      <br>
                      &nbsp; &lt;body&gt;
                      <br>
                      &nbsp; &nbsp; &lt;p&gt;
                      <br>
                      &nbsp; &nbsp; &nbsp; Hello World
                      <br>
                      &nbsp; &nbsp; &lt;/p&gt;
                      <br>
                      &nbsp; &lt;/body&gt;
                      <br>
                      &lt;/html&gt;
                    </code>
                        <br> title tag is for the text describing what the page is at the top of the tab. p tag is a paragraph tag and that is for displaying text. Enter in the text written here and then test it by dropping it in your browser or double
                        clicking the html file.
                        <br>
                        <br> You should get something that looks like this
                    </p>
                    <img src="../images/tutorials/web/Picture1.png" alt="Base layout" class="col-md-6 col-xs-12">
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 3</h2>
                    <p>
                        The <code>&lt;head&gt;</code> is where all scripts, meta data, styles are defined called or linked to.The title is set here.
                    </p>
                    <p>
                        <code>
                      &lt;html&gt;
                      <br>
                      &lt;head&gt;
                      <br>
                      &nbsp; &lt;title&gt;My Page&lt;/title&gt;
                      <br>
                      &lt;link rel=”stylesheet” href=”main.css” type=”text/css”&gt;
                      <br>
                      &lt;script type=”text/javascript”&gt;
                      <br>
                      &nbsp; function setText(myText)
                      <br>
                      &nbsp; {
                      <br>
                      &nbsp; document.getElementById(‘myId’).innerHTML=myText;
                      <br>
                      &nbsp; }
                      <br>
                      &lt;/script&gt;
                      <br>
                      &lt;/head&gt;
                      <br>
                      &lt;html&gt;
                      </code>
                    </p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 4</h2>
                    <p>The

                        <body> tag is where all the content is written</p>
                    <code>
                          &lt;body&gt; <br>
                          &nbsp; &lt;p&gt; <br>This is my webpage.&lt;/p&gt; <br>
                          &nbsp; &lt;p&gt; <br>&lt;img src=”flowers.jpg” width=”400” height=”400”/&gt; <br>&lt;/p&gt; <br>
                          &nbsp; &lt;p&gt; <br>&lt;a hef=”http://google.com”&gt; <br>A link to google.&lt;/a&gt; <br>&lt;/p&gt; <br>
                          &lt;/body&gt; <br>
                        </code>
                    </p>
                    <br>
                    <p>
                        In the body you can also define and add things such as paragraphs, images, links and even more!
                        <br> Right here we have an image being declared within a paragraph tag, with it’s width and height also defined in the image tag. Then there is also an anchor tag that is most usually used for links and it links to google.
                    </p>
                    <img src="../images/tutorials/web/Picture2.png" alt="Base layout" class="col-md-6 col-xs-12">
                    <p>
                        Double click on the html within the folder
                        <br> You should get something that looks like this
                    </p>
                    <section class="row tutorial_content-row">
                        <div class="col-xs-12">
                            <br>
                            <img src="../images/tutorials/web/Picture3.png" alt="Base layout" class="col-md-6 col-xs-12">
                        </div>
                    </section>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 5</h2>
                    <p>CSS: define how elements appear on a page</p>
                    <p>
                        CSS: define how elements appear on a page Most people use css from another file and then reference that, for us however we’re going to use what’s known as inline css where the styling from the css is inside the index.html file The styling inside an html
                        must be wrapped with a <code> &lt;style&gt; </code> tag. Each css styling looks like this or is similar to this look of having the element and then brackets and then the styling for each. So something like
                        this
                        <br>
                        <code>
                           p {
                             <br> color: red;
                             <br> font-size: 12px;
                           <br>
                         }
                         <br>
                        </code> Would give whatever text is inside a &lt;p&gt; or paragraph tag the color of red and the font-size of 12 pixels.
                        <br> So let’s do a couple things now, first copy the text below into your index.html file so it looks like this <br>
                        <code>
                        &lt;html&gt;
                        <br> &nbsp; &lt;head&gt;
                        <br> &lt;title&gt; Basic style&lt;/title&gt;
                        <br> &nbsp; &lt;style&gt;
                        <br> &nbsp; p{ font-family: “Verdana”;
                        <br> &nbsp; font-size: 18pt; color: red; } &lt;/style&gt;
                        <br> &lt;/head&gt;
                        <br> &lt;body&gt;
                        <br> &lt;p&gt; How are you? &lt;/p&gt;
                        <br> &lt;/body&gt;
                        <br> &lt;/html&gt;
                      </code>
                    </p>
                    <img src="../images/tutorials/web/Picture4.png" alt="Base layout" class="col-md-6 col-xs-12">
                    <p>
                        <br> The page should look like this
                        <img src="../images/tutorials/web/Picture5.png" alt="Base layout" class="col-md-6 col-xs-12">
                    </p>
                </div>
            </section>

            <!-- content left, picture right -->
            <section class="row tutorial_content-row well">
                <div class="col-md-6 col-xs-12">
                    <h2>Step 6</h2>
                    <p>
                        Now let’s see what happens when we link a css and add what was inside the style tags to that.
                        <br> To link the css we’d simply add a link to it in the head of the html file with a tag that looks like this
                        <br>
                        <code>&lt;link rel=”stylesheet” href=”main.css” type=”text/css”&gt; <br></code>
                    </p>
                    <p>
                        Enter in the text written here to a new file and name it main.css, put this file in the website folder
                        <br>
                    </p>
                    <code>
                      p {
                        <br>font-family: “Verdana”;
                        <br>font-size: 18 pt;
                        <br>
                        color: red;
                      <br>}
                      .content {
                          <br>
                          color: blue;
                        <br>}
                          <br>#info {
                            <br>background-color: green;
                            <br>height: 100 px;
                            <br>width: 100 px;
                          <br>}
                          <br>
                    </code>
                    <p>
                        Add this content below to the body of the html file as well
                    </p>
                    <code>
                    &lt;body&gt; <br> &lt;p&gt; <br>My first paragraph.&lt;/p&gt;
                    <br>&lt;div class=”content”&gt;
                    <br>Some classy content.
                    <br>&lt;/div&gt;
                    <br>&lt;div id=”info”&gt;
                    <br>Some id info.
                    <br>&lt;/div&gt;
                    <br>&lt;/body&gt;
                    <br>
                  </code>
                    <p>
                        After adding the link in the html file and the css to the css file the page should look like this
                    </p>
                </div>
                <p>
                    <br> These two files should look like
                    <br>
                    <img src="../images/tutorials/web/Picture6.png" alt="Base layout" class="col-md-6 col-xs-12">
                    <br>
                    <img src="../images/tutorials/web/Picture7.png" alt="Base layout" class="col-md-6 col-xs-12">
                    <br>
                    <img src="../images/tutorials/web/Picture8.png" alt="Base layout" class="col-md-6 col-xs-12">
                </p>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 7</h2>
                    <p>
                        <br> CSS can be written:
                        <br>
                        <br> - internally:
                        <br> inside the html page
                        <br>
                        <br> - externally:
                        <br> in a .css file that is linked to
                        <br>
                        <br> - inline
                        <br> Inside a tag attribute
                        <br> <br> Inline:
                        <br>
                        <code>
                      &lt;html&gt; <br>						&lt;head&gt; <br> &lt;title&gt;
                      <br>My page&lt;/title&gt; <br>						&lt;/head&gt; <br>
                      					&lt;body&gt; <br> &lt;div style=”font-size:10pt;margin:10px;”
                                &gt; <br> My text here. &lt;/div&gt; <br>&lt;/body&gt; <br>
                                &lt;/html&gt; <br>
                    </code>
                        <br>
                    </p>
                    <p>
                        CSS can be applied to many different properties of an html page and html contains many different elements that have css applied to it.
                        <p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-md-6 col-xs-12">
                    <h2>The code...</h2>
                    <p>
                        Once finishing the website, if you have any questions please send them to me via the contact sheet.
                    </p>
                    <p>
                        Also, if you wanna download the files we worked on, you can get them below.
                        <p>
                            The
                            <a href="../tutorials/web/download/csss.html" download>
                      CSS
                      </a>
                            <br> The
                            <a href="../tutorials/web/download/csss.html" download>
                      HTML
                    </a>
                        </p>
                    </p>
                </div>
            </section>
        </section>
    </section>
    <?php include '../footer.php' ?>
    </body>

    </html>
