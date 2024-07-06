<?php
require_once 'db.php';

$conn = getDbConnection();
$sql = "SELECT question, answer FROM questions ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(['error' => 'No questions found']);
}

$conn->close();