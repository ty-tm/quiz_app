<?php
session_start();
require_once 'vendor/autoload.php';
require_once 'config.php';
require_once 'db.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];

// Get user's quiz history from the database
$conn = getDbConnection();
$stmt = $conn->prepare("SELECT * FROM quiz_history WHERE user_id = ?");
$stmt->bind_param("i", $user->sub);
$stmt->execute();
$result = $stmt->get_result();
$quizHistory = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Quiz App</title>
    <link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>User Profile</h1>
        <div id="profile-info">
            <p>Username: <?php echo htmlspecialchars($user->name); ?></p>
            <p>Email: <?php echo htmlspecialchars($user->email); ?></p>
        </div>
        <h2>Quiz History</h2>
        <ul id="quiz-history">
            <?php foreach ($quizHistory as $quiz): ?>
                <li>Date: <?php echo $quiz['date']; ?>, Score: <?php echo $quiz['score']; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="quiz.php" class="btn">Start New Quiz</a>
        <button id="logout-button" class="btn">Logout</button>
    </div>
    <script src="js/main.js"></script>
</body>
</html>