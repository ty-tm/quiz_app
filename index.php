<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Quiz App</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-question-circle"></i> Quiz Time!</h1>
        <div id="quiz-container">
            <button id="start-quiz" class="btn"><i class="fas fa-play"></i> Start Quiz</button>
            <div id="question-container" style="display: none;">
                <p id="question"></p>
                <p id="timer"><i class="fas fa-hourglass-half"></i> <span id="time-left"></span></p>
                <p id="answer" style="display: none;"></p>
            </div>
			<div id="loading-spinner" style="display: none;">
    <i class="fas fa-spinner fa-spin"></i> Loading...
</div>
        </div>
        <a href="profile.php" class="btn"><i class="fas fa-user"></i> View Profile</a>
		<div id="theme-switcher">
    <button id="light-theme" class="theme-btn"><i class="fas fa-sun"></i></button>
    <button id="dark-theme" class="theme-btn"><i class="fas fa-moon"></i></button>
</div>
    </div>
    <script src="js/quiz.js"></script>
</body>
</html>