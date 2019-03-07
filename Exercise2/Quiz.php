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
};
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
$answerPercentage=($totalCorrect/5)*100;
echo "<div><p>Question 1: Mauna Kea is in which country/countries?</p><p>You answered:$answer1</p><p>Correct answer:United States</p></div><br>";
echo "<div><p>Question 2: Which movie is an Oscar winning movie i.e. Best Picture Winner in 2012 (in cinemas the previous year)?</p><p>You answered:$answer2</p><p>Correct answer:The Artist</p></div><br>";
echo "<div><p>Question 3: Who invented the wireless remote control?</p><p>You answered:$answer3</p><p>Correct answer:Robert Adler</p></div><br>";
echo "<div><p>Question 4: What is the symbol for Manganese?</p><p>You answered:$answer4</p><p>Correct answer:Mn</p></div><br>";
echo "<div><p>Question 5: What is the national currency of Afghanistan?</p><p>You answered:$answer5</p><p>Correct answer:Afghan afghani</p></div><br>";
echo "<div id='results'>$totalCorrect / 5 correct</div>";
echo "<div id='resultpercentage'>Your score percentage is $answerPercentage% </div>";
?>
