<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>FAQ</title>
    <?php include 'head.php' ?>
</head>
	<body>
        <?php include 'header.php' ?>

        <style>
            #faq {
                background: #FF9800;
            }
        </style>

		<section class="container">
			<h1>FAQ</h1>
			<section class = "row well">
				<div>
					<h2>Database</h2>
				</div>
				<div class = "row well">
					<p>	
						Q: Which version of MySQL is the best to install onto my machine?
					</p>	
					<p>
						A: Generally you can go with whatever the latest version is on the MySQL website, but personally I recommend downloading version 5.7. Of course this is just personal preference but whatever version you download it should work just as good.
					</p>
					<p>
						Q: Which programming language should I learn first?
					</p>	
					<p>
						A: First, begin to think of what your uses will be with that programming language. If you want to be able to write it once and have it across many platforms, then Java may be the language for you. If you are looking to design webpages, then you may be interested in a markup language: Html/CSS.
					</p>
					<p>
						Q: Which database language is best to learn?
					</p>
					<p>
						A: Every language has their specific ups and downs that make it what they are. If you want to pursue a career in database then you should be able to learn as many of them as you can to make you more well rounded.
					</p>		
				</div>
				<div>
					<h2>Security</h2>
				</div>
				<div class = "row well">
					<p>
						Q: Why should I be worried about security?
					</p>
					<p>
						A: In today’s society, you are surrounded by technology. Technology that is unprotected to an extent. People have hacked into cars, digital billboards, Government computers, private servers and more. Engaging in activity of any kind on the Internet can you put yourself in serious danger if you are not taking the right precautions and doing the right things. That is why security should be important to you. One wrong step and you have just given someone everything they need to impersonate you and ruin your life.
					</p>
					<p>
						Q: What is the best way to protect myself?
					</p>
					<p>
						A: The best way to protect yourself is to be careful. Use a password manager that creates super complex passwords that no one will be able to crack for hundreds of years. This will keep hackers out of your accounts on everything from Facebook to online banking. Next, use a passphrase for your computer password instead of a single word and make sure it does not contain any information about you and/or your family. No names, dates, events anything relevant to your family. Outside of that, make sure you are always connected to a site via HTTPS (there will be a green lock in the address bar when you are connected via HTTPS) so that any information you send to the website gets encrypted.
					</p>
				</div>	
				<div>
					<h2>HTML/CSS</h2>
				</div>	
				<div class = "row well">
				<p>
					Q: What is HTML?
				</p>	
				<p>
					A: HTML stands for Hypertext Markup Language and it is what’s known as a markup language as compared to your typical computer programming language that's used to build programs. HTML is really what pieces all the websites together, it’s at least the foundation. It’s the language used to describe what a webpage should look like. HTML uses a series of coded tags – for instance, '<p>' to start a paragraph and '</p>' to end a paragraph. There a bunch of different tags that represent many different things and a website developer or someone who knows HTML professional should know most of them or at least be equipped to use them in any number of situations.
				</p>	
				<p>
					Q: What is CSS?
				</p>
				<p>
					A: CSS stands for Cascading Style Sheets and basically describes how each HTML element or entity is displayed via various things like classes or id’s. An example of this would be on an HTML element or entity called the body tag.
					<br>
					<code>
					body {
					<br>
   						background: black;
   					<br>	
   						color: white;
   					<br>	
					}
					<br>
					</code>
					This CSS rule is pretty simple, it targets the body element and makes it black with a font color of white.
					There are a bunch of different CSS properties that you can define on an element, things like padding, margins, the type of display you want it to do, a transition. There are a lot of different properties in CSS and to almost anything if you take advantage of them.
					
				</p>
			</div>
			<div>
					<h2>Java</h2>
				</div>	
				<div class = "row well">
				<p>
					Q: What is polymorphism?
				</p>	
				<p>
					A: Polymorphism in Java allows for classes to be compatible with other classes as long as both classes are related to eachother. Think of it like this: you just bought a new sports car with tons of additional features. At the most basic form, your car and the most basic state of the car will be the same except yours has extra features. Look at this example:<br>
						<code>
						public interface Automobile{}<br>
						public class Car{}<br>
						public class SportsCar extends Car implements Automobile{}<br>
						</code>
					The additional features show that your car is more specific than just the standard version of the car. So with this logic: <br>
						<code>
						SportsCar sc = new SportsCar();<br>
						Car c = sc;<br>
						Automobile au = sc;<br>
						</code>
					This shows that the SportsCar IS-A Car as well as SportsCar IS-A Automobile. This is polymorphism in Java.
				</p>
				<p>	
					Q: In what method should all my code be in Java?
				</p>
				<p>
					A: All logic in Java MUST be run at some point by the MAIN method in java. Code can be written in other classes and methods, but will only be used if called in the MAIN method. Here is an example  of a main method declaration: <br>
					<code> public static void main(String args[]){} </code>
				</p>
			</div>
			<div>
				<h2>Android</h2>
			</div>
			<div class = "row well">
				<p>
					Q: How do I force the keyboard to show in Android?
				</p>
				<p>
					A:<code>setSoftInputMode(WindowManager.LayoutParams.SOFT_INPUT_STATE_ALWAYS_VISIBLE);</code>
				</p>	
				<p>
					Q: How do I display a dialog in Android and set a field from it?
				</p>
				<p>
					A: <code>AlertDialog.Builder builder = new AlertDialog.Builder(this);
					<br>
					         builder.setTitle("Title");
					<br>
					         final EditText input = new EditText(this);	
					<br>
					builder.setView(input);
					<br>
					builder.setPositiveButton("OK", new DialogInterface.OnClickListener() {
					<br>
					@Override
	            	<br>
	            	public void onClick(DialogInterface dialog, int whichButton) {
	                <br>
					//add the input to the list
	                <br>
	                listItems.add(input.getText().toString());
	                <br>
	                adapter.notifyDataSetChanged();
	            	<br>
	            	}
	            	<br>
					});
					<br>
					builder.setNegativeButton("CANCEL", null);
					<br>
					AlertDialog dialog = builder.create();
					<br>
					dialog.show();
					</code>
				</p>
			</div>	
		</section>	
	</section>
	<?php include 'footer.php' ?>	
	</body>
</html>