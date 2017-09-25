<?php

$submittedanswers = array($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"]);
$answers = array("May 1995", "Eaton", "Dr. Gibbons", "Jayhawk Boulevard", "Blue");
$score = 0;
for($i = 0; i < 5; $i++){
    if ($submittedanswers[i] = $answers[i]){
        $score++;
    }
}
echo'Score: ' . $score . '/5.';



?>