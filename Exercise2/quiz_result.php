<?php
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];



$totalCorrect = 0;

if ($answer1 == "B") {
  $totalCorrect++;
}
else {
  echo "1. What is beta?<br/>";
  echo "Your Answer: $answer1<br/>";
  echo "Correct Answer: Info about anything around climbing.<br/><br/>";
}

if ($answer2 == "A") { $totalCorrect++; }
else {
  echo "2. Who is a pro rock climber?<br/>";
  echo "Your Answer: $answer2.<br/>";
  echo "Correct Answer: Chris Sharma<br/><br/>";
}

if ($answer3 == "C") { $totalCorrect++; }
else {
  echo "3. What is the standard rope length for a single pitch climb?<br/>";
  echo "Your Answer: $answer3.<br/>";
  echo "Correct Answer: 60m<br/><br/>";
}

if ($answer4 == "C") { $totalCorrect++; }
else {
  echo "4. What is the name of the climber who just free soloed El Capitan?<br/>";
  echo "Your Answer: $answer4.<br/>";
  echo "Correct Answer: Alex Honnold <br/><br/>";
}

if ($answer5 == "D") { $totalCorrect++; }
else {
  echo "5. What tools could you use for ice climbing?<br/>";
  echo "Your Answer: $answer5.<br/>";
  echo "Correct Answer: All the above.<br/><br/>";
}


$percent = ($totalCorrect/5)*100;
echo "You got $totalCorrect/5 correct."
echo "<div id='results'>Your score: $percent </div>";
?>
