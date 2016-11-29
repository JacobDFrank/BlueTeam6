<!DOCTYPE html>
<html lang="en">
<head>
    <title>Java Tutorial</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
<?php include '../inner-header.php' ?>

<section class="container">
    <!-- tutorial header and picture -->
    <section class="row tutorial_content-row">
        <h1 class="col-md-7 col-xs-12 tutorial_header">Java Tutorial</h1>
        <div class="col-md-2"></div> <!-- spacer -->
        <img src="../images/andrew.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
    </section>

    <!-- topic and quiz link -->
    <section class="row tutorial_content-row">
        <div class="col-md-8 col-xs-12">
            <h2>GUI (Graphical User Interface)</h2>
            <p>In this tutorial, I will be teaching you how to create a class that does some simple addition on a GUI display.</p>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="row">
                <a href="javaPersonal.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Back to course</a>
            </div>
            <div class="row">
                <a href="javaQuiz.php" class="btn btn-primary col-sm-12 tutorial_quiz-btn">Go to quiz</a>
            </div>
        </div>
    </section>

    <section class="well">
        <!-- content left, picture right -->
        <section class="row tutorial_content-row well">
            <div class="col-md-8 col-xs-12">
                <h2>Step 1</h2>
                <p>For this project, we will be using the JFrame class to create a GUI (Graphical User Interface) Follow along to learn how to build a GUI that will calculate two numbers in Java.To get started, open up the IDE of your choice
                If  you do not have an IDE, download JGrasp <a href="http://spider.eng.auburn.edu/user-cgi/grasp/grasp.pl?;dl=download_jgrasp.html">Here</a>
                (Version 2.0.3)
                </p>
            </div>
        </section>
        <!-- picture left, content right -->
        <section class="row tutorial_content-row well">
            <div class="col-md-6 col-xs-12">
                <h2>Step 2</h2>
                <p>Getting started: First thing we want to do is open up JGrasp. In Java- a class is where we write all the code for methods and variables. To create a new one: go to file → new → java  on the top left of JGrasp. Type into the new file<br>
                <code>public class MyMenu extends JFrame implements ActionListener {   } 
                </code><br>
                Save this file. file-->save
                We extend JFrame as that is the way we will get the GUI to show up.
                We extend ActionListener to make things happen when we press the button to calculate.
                </p>
            </div>
        </section>
        <section class="row tutorial_content-row well">
            <img src="../images/tutorials/java/Step3.jpg" alt="Step 3 picture" class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">
                <h2>Step 3</h2>
                <p>
                Since we are going to be using classes outside of the default library of Java classes, we need to import classes that will allow us to methods created for GUI interfaces.
                Above where you typed your class in Step 2, import the following<br>
                <code>
                import javax.swing.*;<br>
                import java.awt.*;<br>
                import java.awt.event.*;<br>
                import java.io.*;<br>
                import java.util.*;<br>
                </code>
                </p>
            </div>
        </section>
        <section class="row tutorial_content-row well">
            <div class="col-md-7 col-xs-12">
                <h2>Step 4</h2>
                <p>
                Now we are going to create the variables that will be used throughout the class. There are called Global Variables.These variables are available for the entire program’s run. At this step, you should be thinking about what we are going to need for the rest of the program...right? We will need 3 text boxes in total, 2 for your numbers to add, and the last to display the output. We will need 3 labels for telling the user what the text boxes are for, a button to press and calculate the 2 numbers, and then a variable that will hold the sum of the 2 numbers. We will make this variable a double.
                *Doubles are very useful when dealing with numbers that have decimals*. We will make all of these variables private, so that if we were to ever make a larger program, the rest of the program would not be able to see our variables. The variables needed are: 
                private JLabel add1Lbl;<br>
                <code>
                    private JLabel add2Lbl;<br>
                    private JLabel totalLbl;<br>
                    private JTextField add1Txt;<br>
                    private JTextField add2Txt;<br>
                    private JTextField totalTxt;<br>
                    private JButton calcBtn;<br>
                    private double total;<br>
                </code>
                </p>
            </div>
            <img src="../images/tutorials/java/Step4.jpg" alt="Step 4 picture" class="col-md-5 col-xs-12">
        </section>
        <section class="row tutorial_content-row well">
            <div class="col-md-8 col-xs-12">
                <h2>Step 5</h2>
                <p>
                The next step will be to create a Constructor. A constructor is ALWAYS names the same as the class. So your constructor should be:<br>
                <code>public  MyMenu(){  }</code><br>
                This is the heart of the program and where we will use all of the variables that we created in Step 4.
                </p>
            </div>
        </section>
        <section class="row tutorial_content-row well">
            <img src="../images/tutorials/java/gui1.jpg" alt="Gui Template picture" class="col-md-4 col-xs-12">
            <div class="col-md-8 col-xs-12">
                <h2>Step 6</h2>
                <p>
                We will now give the constructor that we created in step 5 we need to add some important instructions. We will tell it what to do when we close the program, the title, how to space the items, the default size, and most importantly SET VISIBLE. By default, this is false.
                Put this at the BOTTOM of the constructor.<br>
                    <code> 
                     pack();<br>
                     setSize(500,200);<br>
                     setLocationRelativeTo( null );<br>
                     setTitle("My First GUI");<br>
                     setDefaultCloseOperation( EXIT_ON_CLOSE );<br>
                     setVisible( true );<br>
                    </code>
                Now press the “Red Man” on the top of your screen, You now have the outline of the program, almost finished. Time to add the rest of the objects.
                </p>
            </div>
        </section>
        <section class="row tutorial_content-row well">
            <div class="col-md-6 col-xs-12">
                <h2>Step 7</h2>
                <p>
                Inside of the Constructor that we created in Step 5, we will now create 2 JPanels .
                JPanels are Containers and we use them to keep objects together. After we create jpMain, we will also change the layout to FlowLayout.
                FlowLayout is used to have everything that we add to be added horizontally instead of vertically. 
                JpItems will have a GridLayout
                GridLayout is used when you want to create a grid on a GUI, for this program we will create a grid with 0 columns and 2 rows.<br>
                <code>
                JPanel jpMain = new JPanel();<br>
                jpMain.setLayout(new FlowLayout() );<br>
                JPanel jpItems = new JPanel();<br>
                jpItems.setLayout(new GridLayout(0,2) );<br>
                </code>
                </p>
            </div>
            <img src="../images/tutorials/java/Step7.jpg" alt="Step 7 picture" class="col-md-6 col-xs-12">
        </section>
        <section class="row tutorial_content-row well">
            <img src="../images/tutorials/java/Step8.jpg" alt="Step 8 picture" class="col-md-7 col-xs-12">
            <div class="col-md-5 col-xs-12">
                <h2>Step 8</h2>
                <p>
                In order to run the program, we need to write the actionPerformed method as we are implementing ActionListener. Every time you Implement , you MUST rewrite a method.<br>
                <code>
                public void actionPerformed(ActionEvent ae){<br>
                Object choice = ae.getSource(); <br>
                try{<br>
                if( choice == calcBtn ){<br>
                total = Double.parseDouble( add1Txt.getText() ) + Double.parseDouble( <br>add2Txt.getText() ) ;  <br>         
                String temp =  String.format("%.2f", total);<br>
                 totalTxt.setText( "" + temp );<br> 
                }<br>
                }//end try<br>
                catch (Exception e){<br>
                JOptionPane.showMessageDialog(null, e.getMessage());<br>
                }<br>
                </code>
                What we are doing here is telling the program what to do if the calculate button is clicked. If it is the button, then we add the total. 
                When using the actionPerformed, you MUST put all of your code into a try / catch This ensures that there is always an action or response that will happen even if there is an error.
                
                </p>
            </div>
        </section>
        <section class="row tutorial_content-row well">
            <div class="col-md-8 col-xs-12">
                <h2>Step 9</h2>
                <p>
                Since we are going to be using classes outside of the default library of Java classes, we need to import classes that will allow us to methods created for GUI interfaces.
                Above where you typed your class in Step 2, import the following<br>
                <code>
                add1Lbl = new JLabel("First Number:",JLabel.RIGHT);<br>
                add2Lbl = new JLabel("Second Number:",JLabel.RIGHT);<br>
                totalLbl = new JLabel("Total:",JLabel.RIGHT);<br>  
                add1Txt = new JTextField(10);<br>
                add2Txt = new JTextField(10);<br>
                totalTxt = new JTextField(10);<br>
                calcBtn = new JButton("Calculate");<br>
                </code><br>
                JLabel has an optional second parameter, which is information that is being passed into a method. The information must match the types that the methods can allow. In this example we are telling the JLabel where to put the label, so on the right. Put this method BEFORE or AFTER the constructor.  
                </p>
            </div>
        </section>
        <section class="row tutorial_content-row well">
            <div class="col-md-8 col-xs-12">
                <h2>Step 10</h2>
                <p>
                The next step will be to create the main method, the most important method in all of java programs. This method is the method in which java runs every single time that you run the program. Since we created everything in a constructor, the call to the method is simple.Put this method BEFORE or AFTER the constructor or the actionPerformed.<br>
                <code>
                public static void main(String args[]){<br>
                new MyMenu(); <br>
                }<br>
                </code><br>
                </p>
            </div>
        </section>
        <section class="row tutorial_content-row well">
            <div class="col-md-9 col-xs-12">
                <h2>Step 11</h2>
                <p>
                After we have given the variables information, we must add them to the frame. To do this we are going to have to use the JPanels that we created. To add our labels, textboxes, and button to the JPanel, type:.<br>
                <code>
                 jpItems.add(add1Lbl);<br>
                 jpItems.add(add2Lbl);<br>
                 
                 jpItems.add(add1Txt);<br>
                 jpItems.add(add2Txt);<br>
                 
                 jpItems.add(totalLbl);<br>
                 jpItems.add(totalTxt);<br>
                 
                 jpMain.add(calcBtn);<br>
                 calcBtn.addActionListener(this);<br>
                </code><br>
                We add the button to jpMain as it does not have to be connected to the labels and textboxes. And also tell it that we want it to use the actionPerformed method that we wrote in Step 8.
                </p>
            </div>
        </section>
        <section class="row tutorial_content-row well">
            <img src="../images/tutorials/java/gui2.jpg" alt="Final Gui" class="col-md-6 col-xs-12">
            <div class="col-md-6 col-xs-12">
                <h2>Step 12</h2>
                <p>
                For the final step, we just need to add the larger JPanels to the frame:<br>
                <code>
                jpMain.add(jpItems,BorderLayout.NORTH);<br>
                add(jpMain,BorderLayout.CENTER);<br>
                </code><br>
                Run it- And that’s it. You’ve completed your first GUI in Java! 
                </p>
            </div>
        </section>
    </section>
</section>
<?php include '../inner-footer.php' ?>
</body>
</html>