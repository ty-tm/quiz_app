<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Quiz App</title>
    <link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Quiz Time!</h1>
        <div id="quiz-container">
            <button id="start-quiz" class="btn">Start Quiz</button>
            <div id="question-container" style="display: none;">
                <p id="question"></p>
                <p id="timer"></p>
                <p id="answer" style="display: none;"></p>
            </div>
        </div>
    </div>
    <script src="js/quiz.js"></script>
</body>
</html>