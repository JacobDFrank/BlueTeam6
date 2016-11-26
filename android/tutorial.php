<!DOCTYPE html>
<html lang="en">
<head>
    <title>Android Tutorial</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

    <style>
        #courses {
            background: #FF9800 !important;
        }
        #tutorial-android {
            background: #FF9800 !important;
            color: white !important;
        }
    </style>

    <section class="container">
        <!-- tutorial header and picture -->
        <section class="row tutorial_content-row">
            <h1 class="col-md-7 col-xs-12 tutorial_header">Tutorial</h1>
            <div class="col-md-2"></div> <!-- spacer -->
            <img src="../images/ben.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
        </section>

        <!-- topic and quiz link -->
        <section class="row tutorial_content-row">
            <div class="col-md-8 col-xs-12">
                <h2>Android</h2>
                <p>Making a simple Android note taking app.</p>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    <a href="../quiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Back to course</a>
                </div>
                <div class="row">
                    <a href="../quiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Go to quiz</a>
                </div>
            </div>
        </section>

        <section class="well">
            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 1</h2>
                    <p>Before starting, you will need to download <a href="https://developer.android.com/studio/index.html">Android Studio</a> and the Android SDK (during the Android Studio installation).</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 2</h2>
                    <p>Create a new app. Name it whatever you want and set your domain to your website or make something up. Press “Next”. Set the minimum SDK level to 11 and press “Next”. Select “Empty Activity” and press “Next” and then press “Finish”. You are now ready to start making the app.</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 3</h2>
                    <p>First, we are going to define colors. Go to “app>src>main>res>values>colors.xml”. If the file does not exist, create it.</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
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
                <div class="col-xs-12">
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

            <!-- content left, picture right -->
            <section class="row tutorial_content-row well">
                <div class="col-md-6 col-xs-12">
                    <h2>Step 6</h2>
                    <p>Now we are going to work on the layout of the app. Go to “app>src>main>res>layout>activity_main.xml”. First thing to do is remove the default padding from the relative layout and include the toolbar. The file should now look like: <br /></p>
                    <code>
                        &lt;?xml version="1.0" encoding="utf-8"?&gt; <br />
                        &lt;RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android" <br />
                                        xmlns:tools="http://schemas.android.com/tools" <br />
                                        android:id="@+id/activity_main" <br />
                                        android:layout_width="match_parent" <br />
                                        android:layout_height="match_parent" <br />
                                        tools:context="com.alderferstudios.noteappexample.MainActivity"&gt; <br /> <br />

                            &lt;include layout="@layout/toolbar" android:id="@+id/toolbar_layout"/&gt; <br /> <br />

                        &lt;/RelativeLayout&gt;
                    </code>
                </div>
                <img src="../images/tutorials/android/empty_layout.png" alt="Empty layout" class="col-md-6 col-xs-12">
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 7</h2>
                    <p>Next we will add a plus vector asset for the floating action button (FAB). To do this, right click on the “res” folder and choose “New>Vector Asset”. Under “Icon”, click the Android icon and in the next window, scroll up and select the “+” icon. Once that is done, check “Enable auto mirroring for RTL layout” and click “Next” and then “Finish”.</p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <img src="../images/tutorials/android/base_layout.png" alt="Base layout" class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <h2>Step 8</h2>
                    <p>Back in the “activity_main.xml”, you will add the ListView to store the items and the floating action button (FAB) to add items to the ListView. Add a ListView below the Toolbar and a FAB in the bottom right corner, offset by the default horizontal and vertical margins. The onClick action for the FAB should be “addItem”, the method that it will execute when clicked. Your code should look like this: <br /></p>
                    <code>
                        &lt;ListView<br/>
                                android:id=”@+id/list"<br/>
                                android:layout_width="match_parent"<br/>
                                android:layout_height="wrap_content"<br/>
                                android:layout_below="@+id/toolbar_layout"&gt;
                        &lt;/ListView&gt;
                        <br /><br />

                        &lt;android.support.design.widget.FloatingActionButton<br/>
                                android:id="@+id/add"<br/>
                                android:src="@drawable/ic_add_black_24dp"<br/>
                                android:tint="@color/white"<br/>
                                app:fabSize="normal"<br/>
                                app:elevation="4dp"<br/>
                                android:onClick="addItem"<br/>
                                android:layout_width="wrap_content"<br/>
                                android:layout_height="wrap_content"<br/>
                                android:layout_alignParentBottom="true"<br/>
                                android:layout_alignParentRight="true"<br/>
                                android:layout_alignParentEnd="true"<br/>
                                android:layout_marginRight="@dimen/activity_horizontal_margin"<br/>
                                android:layout_marginEnd="@dimen/activity_horizontal_margin"<br/>
                                android:layout_marginBottom="@dimen/activity_vertical_margin"/&gt;
                    </code>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 9</h2>
                    <p>Next step is to create a list row layout. It will be a simple LinearLayout with a single TextView. Your code should look like this:<br /></p>
                    <code>
                        &lt;?xml version="1.0" encoding="utf-8"?&gt;<br/>
                        &lt;LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"<br/>
                                      android:layout_width="match_parent"<br/>
                                      android:layout_height="match_parent"<br/>
                                      android:orientation="vertical"&gt;<br/><br/>

                        &lt;TextView<br/>
                                    android:id="@+id/listText"<br/>
                                    android:layout_width="wrap_content"<br/>
                                    android:layout_height="wrap_content"<br/>
                                    android:padding="10dp"/&gt;<br/><br/>

                        &lt;/LinearLayout&gt;
                    </code>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 10</h2>
                    <p>Now it is time to add functionality to the app. Go to “app>src>main>java>yourappdomain>MainActivity.java”. First create a List of list items, ListView, and ArrayAdapter at the class level. <br/></p>
                    <code>
                        private List&lt;String&gt; listItems;<br/>
                        private ListView list;<br/>
                        private ArrayAdapter&lt;String&gt; adapter;
                    </code>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 11</h2>
                    <p>Next, under onCreate, you will set the action bar, instantiate the List, and set the adapter like this:<br/></p>
                    <code>
                        setSupportActionBar((Toolbar) findViewById(R.id.toolbar));<br/><br/>


                        listItems = new ArrayList&lt;&gt;();<br/>
                        list = (ListView) findViewById(R.id.list);<br/><br/>


                        // initiate the listadapter<br/>
                        adapter = new ArrayAdapter&lt;&gt;(this,
                        R.layout.list_row, R.id.listText, listItems);<br/><br/>


                        // assign the list adapter<br/>
                        list.setAdapter(adapter);
                    </code>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 12</h2>
                    <p>Next you will make the addItem method to add items to the List when you click the FAB. The method must take a View (the calling View) as its parameter. Inside the method, simply add an item to the List of items and notify the adapter that its data set has changed. <br/></p>
                    <code>
                        public void addItem(View v) {<br/>
                        listItems.add("Example");<br/>
                        adapter.notifyDataSetChanged();<br/>
                        }
                    </code>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 13</h2>
                    <p>At this point, you should have a working app that adds items to the list when you press the button. However, that is not very useful. Lets add input for note taking. </p>
                </div>
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 14</h2>
                    <p>Now, replace the contents of the addItem method with an AlertDialog that asks for input and adds it to the list. The method should now look like this: <br/></p>
                    <code>
                        public void addItem(View v) {<br/>
                        AlertDialog.Builder builder = new AlertDialog.Builder(this);<br/>
                        builder.setTitle("Please enter the note to add");<br/><br/>


                        final EditText input = new EditText(this);<br/>
                        builder.setView(input);<br/><br/>


                        builder.setPositiveButton("OK", new DialogInterface.OnClickListener() {<br/>
                        @Override<br/>
                        public void onClick(DialogInterface dialog, int whichButton) {<br/>
                        //add the input to the list<br/>
                        listItems.add(input.getText().toString());<br/>
                        adapter.notifyDataSetChanged();<br/>
                        }<br/>
                        });<br/>
                        builder.setNegativeButton("CANCEL", null);<br/><br/>


                        AlertDialog dialog = builder.create();<br/>
                        dialog.show();<br/><br/>


                        //show the keyboard when the dialog appears<br/>
                        try {<br/>
                        dialog.getWindow().setSoftInputMode(WindowManager.LayoutParams.SOFT_INPUT_STATE_ALWAYS_VISIBLE);<br/>
                        } catch (NullPointerException e) {<br/>
                        Log.e("failed to show keyboard", e.getMessage());<br/>
                        }<br/>
                        }

                    </code>
                </div>
            </section>

            <!-- content left, picture right -->
            <section class="row tutorial_content-row well">
                <div class="col-md-6 col-xs-12">
                    <h2>Step 15</h2>
                    <p>Congratulations, you now have a working note taking app. This app can take whatever you type in the dialog and save it to the list. Your app should now look something like this:</p>
                </div>
                <img src="../images/tutorials/android/final_app.png" alt="Final Layout" class="col-md-6 col-xs-12">
            </section>

            <!-- full content -->
            <section class="row tutorial_content-row well">
                <div class="col-xs-12">
                    <h2>Step 16</h2>
                    <p>If you need to reference the source code, you can find the app at <a href="https://github.com/BenAlderfer/Note-App-Example">https://github.com/BenAlderfer/Note-App-Example.</a></p>
                </div>
            </section>
        </section>
    </section>
    <?php include '../footer.php' ?>
</body>
</html>