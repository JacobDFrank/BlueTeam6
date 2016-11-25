<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Blogs</title>
		<?php include 'head.php' ?>
	</head>
	<body>
		<?php include 'header.php' ?>

		<section class="container">
			<section class="row">
                <div class="col-md-4"></div>
				<!--SPLASH, image?, banner?-->
				<div class="col-md-4">
                    <img src="images/blogs/blog.png" alt="Blog">
                </div>
                <div class="col-md-4"></div>
			</section>

			<!--Blogs-->
            <section class="row left-buffer">
                <div class="col-md-10">
                        <h1>Blog</h1>
                </div>
            </section>

            <!--SECURITY BLOGS-->
			<section class="well top-buffer" id="security">
                <h2>Security</h2>
                <!--BLOG POST 1-->
                <section class="row top-buffer">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 well">
                        <!--Blog Heading-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h3>Topic Expansion!</h3>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <h5>September 22, 2016</h5>
                            </div>
                        </div>
                        <!--Blog Post itself-->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p>
                                    Hey all, <br />
                                    After the positive feedback on my Introduction to Network Security, I have decided to expand my tutorial and security program overall! Within the next month you can expect to see a new section that will discuss application security! Pending on the feedback from that, I might dive into a subsection of application security, secure coding! With this new section being added to my portion of the site, I will also add quiz questions that reflect the updated changes. In addition to this, I am working on setting up a couple of workshops where I can teach some security techniques and practices live to you all! Updates on this will come around soon but at the moment I’m working out the feasibility of such a feat! I look forward to dropping more content for you all!<br />
                                    Cheers!<br />
                                    --Ryan
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </section>

                <!--BLOG POST 2-->
                <section class="row top-buffer">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 well">
                        <!--Blog Heading-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h3>Moar Security!</h3>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <h5>October 22, 2016</h5>
                            </div>
                        </div>
                        <!--Blog Post itself-->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p>
                                    Hey all,<br />
                                    Welcome back to my blog everyone! I have quite a number of updates for you all this time, so let’s get to them! As you all have noticed by now, I have updated the site to include the Introduction to Application Security! Inside of this topic, I have also began to include information about secure coding! Currently, only the section on Front End coding is up however, I’m working on adding a section about Back End coding to complete that topic! In addition to that, I will be adding material to the quiz as well to cover all section of the site. Last month I mentioned that I was working on setting up a couple of online workshops well, I can say that I successfully set up two workshops! These workshops will not start until after the holiday season and the years turns over. Until then, think of a topic you would like me to cover! I have a few in mind however, if there is a lot of desire for different topics I will send out a poll in the newsletter and then go with the most popular topic! Don’t fret if you can’t make the workshop as I will create a tutorial on the website after the workshop is complete! If there is a certain topic you would like me to cover (in the workshop or just on the website), feel free to email it to me at <a href='mailto&#58;r%7&#57;ano&#110;%73%&#54;&#53;c%7&#53;ri%7&#52;&#121;&#64;&#37;&#54;&#50;&#108;u&#101;&#116;e%61&#109;six&#46;&#99;om'>ry&#97;non&#115;ecu&#114;i&#116;&#121;&#64;blu&#101;&#116;eamsix&#46;com</a>! That’s all for today everyone!<br />
                                    Cheers!<br />
                                    --Ryan
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </section>
            </section>

<!--            DATABASE BLOGS-->
            <section class="well top-buffer" id="Database">
                <h2>Database</h2>
                <!--BLOG POST 1-->
                <section class="row top-buffer">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 well">
                        <!--Blog Heading-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h3>Blog Title</h3>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <h5>September 23, 2016</h5>
                            </div>
                        </div>
                        <!--Blog Post itself-->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p>
                                    “Strict” Mode as I have mentioned in the past, my preference for MySQL 5.7 is due to many reasons. One of them being the introduction of “strict” mode. In this mode MySQL will handle exceptions fairly nicely than previously loose version of MySQL. For example if an INSERT or UPDATE command is entered with invalid or missing values, MySQL will basically yell at you for the error and will give a more in depth explanation of where the problem lies. As opposed to earlier versions which tend to be more lenient can let these errors slip past which can cause terrible problems to your database. If you recently updated to 5.7 you may find this mode annoying, but worry not there is a solution. Simply type in the command: <br />
                                    <code>mysql> set global SQL_MODE="NO_ENGINE_SUBSTITUTION";</code> <br/>
                                    However, I prefer this mode to be in since it promotes cleaner code and you can be sure nothing will be wrong once you run your scripts.
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </section>

                <!--BLOG POST 2-->
                <section class="row top-buffer">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 well">
                        <!--Blog Heading-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h3>Blog Title</h3>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <h5>October 4, 2016</h5>
                            </div>
                        </div>
                        <!--Blog Post itself-->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p>
                                    So one of the neatest new features that I’ve discovered in MySQL 5.7 is called Generated Columns. The basic idea of it is that you send information into the database without using the INSERT and UPDATE clauses. How does this work you may ask?
                                    <br />Lets look at some code:<br />
                                    <code>CREATE TABLE contacts (<br />
                                    &emsp;id INT AUTO_INCREMENT PRIMARY KEY,<br />
                                    &emsp;first_name VARCHAR(50) NOT NULL,<br />
                                    &emsp;last_name VARCHAR(50) NOT NULL,<br />
                                    &emsp;email VARCHAR(100) NOT NULL<br />
                                    );</code><br />
                                    If we want to SELECT data and show the first and last name in the column wed have to use a CONCAT() such as:<br />
                                    <code>SELECT id, CONCAT(first_name, ' ', last_name), email FROM contacts;</code><br />
                                    Instead with the Generated Column feature we can write out:<br />
                                    <code>CREATE TABLE contacts (
                                    &emsp;id INT AUTO_INCREMENT PRIMARY KEY,<br />
                                    &emsp;first_name VARCHAR(50) NOT NULL,<br />
                                    &emsp;last_name VARCHAR(50) NOT NULL,<br />
                                    &emsp;fullname varchar(101) GENERATED ALWAYS AS (concat(first_name,' ',last_name)),<br />
                                    &emsp;email VARCHAR(100) NOT NULL<br />
                                    );</code><br />
                                    As a result you can now call the fullname attribute normally with a SELECT statement.
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </section>
            </section>

            <!--ANDROID BLOGS-->
            <section class="well top-buffer" id="android">
                <h2>Android</h2>
                <!--BLOG POST 1-->
                <section class="row top-buffer">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 well">
                        <!--Blog Heading-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h3>Split Screen in Android Nougat</h3>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <h5>November 3, 2016</h5>
                            </div>
                        </div>
                        <!--Blog Post itself-->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <img src="images/blogs/android/blog1.png" alt="Split screen" class="col-md-2" />
                            <div class="col-md-8">
                                <p>
                                    Hey all, <br />
                                    With the release of Android 7 (Nougat) and API 24, there is a new feature natively supported by Android, multi-window (split screen). With this change, most apps will need to make some adjustments to support the new feature. <br /><br />
                                    To get started, place this in your manifest inside an activity or application:<br/>
                                    <code>android:resizeableActivity=["true"]</code><br />
                                    Also in the manifest layout, you can set some other options: <br />
                                    <code>android:defaultWidth</code> - Default width of the activity when launched in freeform mode.<br />
                                    <code>android:defaultHeight</code> - Default height of the activity when launched in freeform mode.<br />
                                    <code>android:gravity</code> - Initial placement of the activity when launched in freeform mode. See the Gravity reference for suitable values.<br />
                                    <code>android:minHeight, android:minWidth</code> -  Minimum height and minimum width for the activity in both split-screen and freeform modes. If the user moves the divider in split-screen mode to make an activity smaller than the specified minimum, the system crops the activity to the size the user requests.<br />
                                    Here is an example of a customized activity:<br />
                                    <code>&#60;activity android:name=".MyActivity"><br />
                                        &emsp;&#60;layout android:defaultHeight="500dp"<br />
                                            &emsp;android:defaultWidth="600dp"<br />
                                            &emsp;android:gravity="top|end"<br />
                                            &emsp;android:minHeight="450dp"<br />
                                            &emsp;android:minWidth="300dp" /><br />
                                    &#60;/activity></code><br />
                                    At this point, your app should be ready. Make sure you also take a look at your layouts and make sure they adjust well since you could have less screen to work with. <br /> <br />
                                    While in mutli-window mode, your app will ignore certain features like setting screen orientation so make sure you account for that. <br /><br />
                                    For more information, see:
                                    <a href="https://developer.android.com/guide/topics/ui/multi-window.html">https://developer.android.com/guide/topics/ui/multi-window.html</a>
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </section>

                <!--BLOG POST 2-->
                <section class="row top-buffer">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 well">
                        <!--Blog Heading-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h3>Custom Quick Settings Tile in Android Nougat</h3>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <h5>November 17, 2016</h5>
                            </div>
                        </div>
                        <!--Blog Post itself-->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <p>
                                    Hey all,<br />
                                    With the release of Android 7 (Nougat) and API 24, there is a new feature natively supported by Android, custom Quick Settings Tiles. With this change, apps can define their own Quick Settings Tiles for fast repeated actions. <br /><br />
                                    Adding your own Quick Settings Tile is very easy. Simply add a service to your app’s AndroidManifest such as this one:<br />
                                    <code>&#60;service android:name=".QuickSettingsService"<br />
                                        &emsp;android:icon="@drawable/ic_qt_24dp"<br />
                                        &emsp;android:label="@string/qt_label"<br />
                                        &emsp;android:permission="android.permission.BIND_QUICK_SETTINGS_TILE"><br />
                                        &emsp;&#60;intent-filter><br />
                                            &emsp;&#60;action &emsp;android:name="android.service.quicksettings.action.QS_TILE" /><br />
                                        &emsp;&#60;/intent-filter><br />
                                        &emsp;&#60;/service></code><br />
                                    If you need to dynamically change the state of the Tile, you can easily use the PackageManager to enable and disable the service:<br />
                                    <code>if (tileEnabled) { <br />
                                       &emsp;pm.setComponentEnabledSetting(componentName, <br />
                                       &emsp;PackageManager.COMPONENT_ENABLED_STATE_ENABLED,<br />
                                       &emsp;PackageManager.DONT_KILL_APP);<br />
                                    &emsp;} else {<br />
                                       &emsp;pm.setComponentEnabledSetting(componentName, <br />
                                       &emsp;PackageManager.COMPONENT_ENABLED_STATE_DISABLED,<br />
                                       &emsp;PackageManager.DONT_KILL_APP);<br />
                                    }</code><br />
                                    For more information, see: <a href="https://developer.android.com/reference/android/service/quicksettings/Tile.html">https://developer.android.com/reference/android/service/quicksettings/Tile.html</a>
                                </p>
                            </div>
                            <img src="images/blogs/android/blog2.png" alt="Quick Settings" class="col-md-2"
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </section>
            </section>

<!--            BLOG TEMPLATE-->
            <section class="well top-buffer" id="subject">
                <h2>Subject</h2>
                <!--BLOG POST 1-->
                <section class="row top-buffer">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 well">
                        <!--Blog Heading-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h3>Blog Title</h3>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <h5>Blog Date</h5>
                            </div>
                        </div>
                        <!--Blog Post itself-->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p>
                                    Blog numero uno.
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </section>

                <!--BLOG POST 2-->
                <section class="row top-buffer">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 well">
                        <!--Blog Heading-->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h3>Blog Title</h3>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <h5>Blog Date</h5>
                            </div>
                        </div>
                        <!--Blog Post itself-->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p>
                                    Blog numero dos.
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </section>
            </section>
		</section>

		<?php include 'footer.php' ?>
	</body>
</html>
