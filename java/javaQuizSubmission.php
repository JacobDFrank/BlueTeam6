<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submission</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../header.php' ?>
<section class="container">
	<section class= "row">
		<section class="row tutorial_content-row">
        <h1 class="col-md-7 col-xs-12 tutorial_header">Results</h1>
        <section class="col-md-2"></section> <!-- spacer -->
         <img src="../images/andrew.jpg" alt="Picture of author" class="col-md-3 col-xs-6">
      </section>
		<?php
			$totalCorrect = 0;

			$q1sub = $_POST['optradio1'];
			$q2sub = $_POST['optradio2'];
			$q3sub = $_POST['optradio3'];
			$q4sub = $_POST['optradio4'];
			$q5sub = $_POST['optradio5'];
			$q6sub = $_POST['optradio6'];
			$q7sub = $_POST['optradio7'];
			$q8sub = $_POST['optradio8'];
			$q9sub = $_POST['optradio9'];
			$q10sub = $_POST['optradio10'];

			//Change correct $answer#= X to the correct answer and move case statements accordingly 
			$answer1 = 4;
			echo "<div class = \"container\"><div class= \"well\">";
			echo "Question 1: ";
			switch($q1sub)
				{
						case 4:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer1;
							break;
				}
			echo "</br></br>";
			$answer2 = 1;
			echo "Question 2: ";
			switch($q2sub)
				{
						case 1:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer2;
							break;
				}
			echo "</br></br>";
			$answer3 = 2;
			echo "Question 3: ";
			switch($q3sub)
				{
						case 2:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer3;
							break;
				}
			echo "</br></br>";
			$answer4 = 1;
			echo "Question 4: ";
			switch($q4sub)
				{
						case 1:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer4;
							break;
				}
			echo "</br></br>";
			$answer5 = 2;
			echo "Question 5: ";
			switch($q5sub)
				{
						case 2:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer5;
							break;
				}
			echo "</br></br>";
			$answer6 = 1;
			echo "Question 6: ";
			switch($q6sub)
				{
						case 1:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer6;
							break;
				}
			echo "</br></br>";
			$answer7 = 3;
			echo "Question 7: ";
			switch($q7sub)
				{
						case 3:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer7;
							break;
				}
			echo "</br></br>";
			$answer8 = 1;
			echo "Question 8: ";
			switch($q8sub)
				{
						case 1:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer8;
							break;
				}
			echo "</br></br>";
			$answer9 = 2;
			echo "Question 2: ";
			switch($q2sub)
				{
						case 2:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer9;
							break;
				}
			echo "</br></br>";
			$answer10 = 1;
			echo "Question 10: ";
			switch($q10sub)
				{
						case 1:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was question : ". $answer10 ."<br>";
							break;
				}
			echo "<h2>You got ". $totalCorrect . "/10 correct</h2>";
			echo "<a href=\"javaPersonal.php\" class=\"btn btn-primary col-sm-2\">Back to Java</a><br><br></div></div>"		
		?>
	</section>
</section>
</body>
</html>
