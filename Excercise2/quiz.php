<?php

$submittedanswers = array($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"]); //Answers inputted
$answers = array("May 1995", "Eaton", "Jayhawk Boulevard", "Dr. Gibbons", "Blue"); //Actual Answers
$score = 0;

for($i = 0; $i < 5; $i++){ //Calculates score
    if ($submittedanswers[$i] === $answers[$i]){
        $score++;
    }
}

echo'Score: ' . 100* $score/5 . '%.<br>'; //Calculates percentage 

//Formatting to display correct answers w your answers

echo'<br><br>Question 1: What month and year was Javascript created? <br>You answered: ' . $submittedanswers[0] . '<br>Correct answer: ' . $answers[0];

echo'<br><br>Question 2: What bulding is EECS448 lecture in? <br>You answered: ' . $submittedanswers[1] . '<br>Correct answer: ' . $answers[1];

echo'<br><br>Question 3: What is the main road on campus? <br>You answered: ' . $submittedanswers[2] . '<br>Correct answer: ' . $answers[2];

echo'<br><br>Question 4: Who is the current professor of EECS 448? <br>You answered: ' . $submittedanswers[3] . '<br>Correct answer: ' . $answers[3];

echo'<br><br>Question 5: What color is a blue car? <br>You answered: ' . $submittedanswers[4] . '<br>Correct answer: ' . $answers[4];



?>