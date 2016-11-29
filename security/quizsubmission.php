<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ryan on Security: Quiz Submission</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>
<section class="container">
	<section class= "row">
		<section class="row tutorial_content-row">
        <h1 class="col-md-7 col-xs-12 tutorial_header">Security Quiz Results</h1>
        <section class="col-md-2"></section> <!-- spacer -->
         <img src="../images/ryan.png" alt="Picture of author" class="col-md-3 col-xs-6">
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
			$answer1 = 2;
			echo "<div class = \"container\"><div class= \"well\">";
			echo "Question 1: ";
			switch($q1sub)
				{
						case 2:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer1 ."<br/>";
							break;
				}
			echo "</br></br>";
			$answer2 = 2;
			echo "Question 2: ";
			switch($q2sub)
				{
						case 2:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer2 ."<br/>";
							break;
				}
			echo "</br></br>";
			$answer3 = 4;
			echo "Question 3: ";
			switch($q3sub)
				{
						case 4:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer3 ."<br/>";
							break;
				}
			echo "</br></br>";
			$answer4 = 3;
			echo "Question 4: ";
			switch($q4sub)
				{
						case 3:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer4 ."<br/>";
							break;
				}
			echo "</br></br>";
			$answer5 = 4;
			echo "Question 5: ";
			switch($q5sub)
				{
						case 4:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer5 ."<br/>";
							break;
				}
			echo "</br></br>";
			$answer6 = 4;
			echo "Question 6: ";
			switch($q6sub)
				{
						case 4:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer6 ."<br/>";
							break;
				}
			echo "</br></br>";
			$answer7 = 2;
			echo "Question 7: ";
			switch($q7sub)
				{
						case 2:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer7 ."<br/>";
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
							echo "Oops! The Correct answer was option : ". $answer8 ."<br/>";
							break;
				}
			echo "</br></br>";
			$answer9 = 4;
			echo "Question 9: ";
			switch($q9sub)
				{
						case 4:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer9 ."<br/>";
							break;
				}
			echo "</br></br>";
			$answer10 = 3;
			echo "Question 10: ";
			switch($q10sub)
				{
						case 3:
							echo "Correct. Good Job!";
							$totalCorrect += 1;
							break;
						default:
							echo "Oops! The Correct answer was option : ". $answer10 ."<br>";
							break;
				}
			echo "<h2>You got ". $totalCorrect . "/10 correct</h2><br/>";
			//Change this to your personal page
			echo "<a href=\"personal.php\" class=\"btn btn-primary col-sm-2\">Back to Security</a><br><br></div></div>"
		?>
	</section>
</section>
    <?php include '../inner-footer.php' ?>
</body>
</html>
