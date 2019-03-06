<?php
$answer1 = $_POST['Question_1_input'];
$answer2 = $_POST['Question_2_input'];
$answer3 = $_POST['Question_3_input'];
$answer4 = $_POST['Question_4_input'];
$answer5 = $_POST['Question_5_input'];

$totalCorrect = 0;
if ($answer1 == "United States")
{
  $totalCorrect++;
}

if ($answer2 == "The Artist")
{
  $totalCorrect++;
}

if ($answer3 == "Robert Adler")
{
  $totalCorrect++;
}

if ($answer4 == "Mn")
{
  $totalCorrect++;
}

if ($answer5 == "Afghan afghani")
{
  $totalCorrect++;
}
$answerPercentage=()$totalCorrect/5)*100;
echo "<div><p>Question 1: Mauna Kea is in which country/countries?</p><br><p>You answered:$answer1</p><br><p>Correct answer:United States</p></div>";
echo "<div><p>Question 1: Which movie is an Oscar winning movie i.e. Best Picture Winner in 2012 (in cinemas the previous year)?</p><br><p>You answered:$answer2</p><br><p>Correct answer:The Artist</p></div>";
echo "<div><p>Question 1: Who invented the wireless remote control?</p><br><p>You answered:$answer3</p><br><p>Correct answer:Robert Adler</p></div>";
echo "<div><p>Question 1: What is the symbol for Manganese?</p><br><p>You answered:$answer4</p><br><p>Correct answer:Mn</p></div>";
echo "<div><p>Question 1: What is the national currency of Afghanistan?</p><br><p>You answered:$answer5</p><br><p>Correct answer:Afghan afghani</p></div>";
echo "<div id='results'>$totalCorrect / 5 correct</div>";
echo "<div id='resultpercentage'>Your score percentage is $answerPercentage% </div>";
?>
