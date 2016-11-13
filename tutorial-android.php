<!DOCTYPE html>
<html lang="en">
<head>
    <title>Android Tutorial</title>
    <?php include 'head.php' ?>
</head>
<body>
<?php include 'header.php' ?>

    <section class="container">
        <!-- tutorial header and picture -->
        <section class="row tutorial_content-row">
            <h1 class="col-md-7 tutorial_header">Tutorial</h1>
            <div class="col-md-2"></div> <!-- spacer -->
            <img src="images/ben.jpg" alt="Picture of author" class="col-md-3 col-sm-6">
        </section>

        <!-- topic and quiz link -->
        <section class="row tutorial_content-row">
            <div class="col-md-8">
                <h2>Android</h2>
                <p>Making a simple Android app</p>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <a href="quiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Back to course</a>
                </div>
                <div class="row">
                    <a href="quiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Go to quiz</a>
                </div>
            </div>
        </section>

        <section class="well">
            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-md-12">
                    <h2>Step 1</h2>
                    <p>Before starting, you will need to download <a href="https://developer.android.com/studio/index.html">Android Studio</a> and the Android SDK (during the Android Studio installation).</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-md-12">
                    <h2>Step 2</h2>
                    <p>Create a new app. Name it whatever you want and set your domain to your website or make something up. Press “Next”. Set the minimum SDK level to 11 and press “Next”. Select “Empty Activity” and press “Next” and then press “Finish”. You are now ready to start making the app.</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-md-12">
                    <h2>Step 3</h2>
                    <p>First, we are going to define colors. Go to “app>src>main>res>values>colors.xml”. If the file does not exist, create it.</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-md-12">
                    <h2>Step 4</h2>
                    <p>In that file, set the colorPrimary, colorPrimaryDark, and colorAccent. The file should look like this: <br />
                        <code>
                            &lt;?xml version="1.0" encoding="utf-8"?&gt; <br />
                            &lt;resources&gt; <br />
                                &lt;color name="colorPrimary">#2196F3&lt;/color&gt; <br />
                                &lt;color name="colorPrimaryDark">#1976D2&lt;/color&gt; <br />
                                &lt;color name="colorAccent">#FF9800&lt;/color&gt; <br />
                                &lt;color name="white">#FFFFFF&lt;/color&gt; <br />
                            &lt;/resources&gt;
                        </code>
                    </p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-md-12">
                    <h2>Step 5</h2>
                    <p>Now we will set up the theme. Go to “app>src>main>res>values>styles.xml”. If the file does not exist, create it. In the file, you will need to customize the styles to match your design and add the “Toolbar” style. You can either make your own or use this: <br />
                        <code>
                            &lt;resources&gt; <br />
                                <!-- Base application theme. -->
                                &lt;style name="AppTheme" parent="Theme.AppCompat.Light.NoActionBar"&gt; <br />
                                    &lt;item name="colorPrimary"&gt;@color/colorPrimary&lt;/item&gt; <br />
                                    &lt;item name="colorPrimaryDark"&gt;@color/colorPrimaryDark&lt;/item&gt; <br />
                                    &lt;item name="colorAccent"&gt;@color/colorAccent&lt;/item&gt; <br />
                                &lt;/style&gt; <br /> <br />

                                <!-- Toolbar theme. -->
                                &lt;style name="Toolbar" parent="Theme.AppCompat.Light.NoActionBar"&gt; <br />
                                    &lt;item name="android:windowNoTitle"&gt;true&lt;/item&gt; <br />
                                    &lt;item name="android:windowActionBar"&gt;false&lt;/item&gt; <br />
                                    &lt;item name="android:textColorPrimary"&gt;@color/white&lt;/item&gt; <br />        <!-- activity name text color -->
                                    &lt;item name="android:background"&gt;@color/colorPrimary&lt;/item&gt; <br />        <!-- bar background color -->
                                &lt;/style&gt; <br />
                            &lt;/resources&gt;
                        </code>
                    </p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-md-12">
                    <h2>Step 6</h2>
                    <p>First, we are going to define colors. Go to “app>src>main>res>values>colors.xml”. If the file does not exist, create it.</p>
                </div>
            </section>

        </section>
    </section>
    <?php include 'footer.php' ?>
</body>
</html>