<!DOCTYPE html>
<html lang="en">
<head>
    <title>Android Submission</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
<?php include '../header.php' ?>
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
				case $answer1:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer1 ."<br>";
					break;
		}
	$answer2 = 3;
	echo "Question 2: ";
	switch($q2sub)
		{
				case $answer2:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer2 ."<br>";
					break;
		}
	$answer3 = 1;
	echo "Question 3: ";
	switch($q3sub)
		{
				case $answer3:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer3 ."<br>";
					break;
		}
	$answer4 = 4;
	echo "Question 4: ";
	switch($q4sub)
		{
				case $answer4:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer1 ."<br>";
					break;
		}
	$answer5 = 4;
	echo "Question 5: ";
	switch($q5sub)
		{
				case $answer5:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer5 ."<br>";
					break;
		}
	$answer6 = 1;
	echo "Question 6: ";
	switch($q6sub)
		{
				case $answer6:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer6 ."<br>";
					break;
		}
	$answer7 = 3;
	echo "Question 7: ";
	switch($q7sub)
		{
				case $answer7:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer7 ."<br>";
					break;
		}
	$answer8 = 4;
	echo "Question 8: ";
	switch($q8sub)
		{
				case $answer8:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer8 ."<br>";
					break;
		}
	$answer9 = 2;
	echo "Question 9: ";
	switch($q2sub)
		{
				case $answer9:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer9 ."<br>";
					break;
		}
	$answer10 = 3;
	echo "Question 10: ";
	switch($q10sub)
		{
				case $answer10:
					echo "Correct. Good Job! <br>";
					$totalCorrect += 1;
					break;
				default:
					echo "Oops! The correct answer was question : ". $answer10 ."<br>";
					break;
		}
	echo "You got ". $totalCorrect . "/10 correct.</div></div>";
		
?>
<?php include '../footer.php' ?>
</body>
</html>