<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submission</title>
    <?php include 'head.php' ?>
</head>
<body>
    <?php include 'header.php' ?>
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
	$answer1 = 1;
	echo "<div class = \"container\"><div class= \"well\">";
	echo "Question 1: ";
	switch($q1sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer1 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer1 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer1 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer1 ."<br>";
					break;
		}
	$answer2 = 1;
	echo "Question 2: ";
	switch($q2sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer2 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer2 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer2 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer2 ."<br>";
					break;
		}
	$answer3 = 1;
	echo "Question 3: ";
	switch($q3sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer3 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer3 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer3 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer3 ."<br>";
					break;
		}
	$answer4 = 1;
	echo "Question 4: ";
	switch($q4sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer1 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer1 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer1 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer1 ."<br>";
					break;
		}
	$answer5 = 1;
	echo "Question 5: ";
	switch($q5sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer5 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer5 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer5 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer5 ."<br>";
					break;
		}
	$answer6 = 1;
	echo "Question 6: ";
	switch($q6sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer6 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer6 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer6 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer6 ."<br>";
					break;
		}
	$answer7 = 1;
	echo "Question 7: ";
	switch($q7sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer7 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer7 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer7 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer7 ."<br>";
					break;
		}
	$answer8 = 1;
	echo "Question 8: ";
	switch($q8sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer8 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer8 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer8 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer8 ."<br>";
					break;
		}
	$answer9 = 1;
	echo "Question 2: ";
	switch($q2sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer9. "<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer9 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer9 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer9 ."<br>";
					break;
		}
	$answer10 = 1;
	echo "Question 10: ";
	switch($q10sub)
		{
				case 1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				case 2:
					echo "Oops! The Correct answer was question : ". $answer10 ."<br>";
					break;
				case 3:
					echo "Oops! The Correct answer was question : ". $answer10 ."<br>";
					break;
				case 4:
					echo "Oops! The Correct answer was question : ". $answer10 ."<br>";
					break;
				default:
					echo "Oops! The Correct answer was question : ". $answer10 ."<br>";
					break;
		}
	echo "You got ". $totalCorrect . "/10 correct.</div></div>";
		
?>

</body>
</html>