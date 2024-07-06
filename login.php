<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once 'config.php';

use Jumbojett\OpenIDConnectClient;

$oidc = new OpenIDConnectClient(OIDC_PROVIDER_URL, OIDC_CLIENT_ID, OIDC_CLIENT_SECRET);
$oidc->setRedirectURL(OIDC_REDIRECT_URI);

if (!isset($_GET['code'])) {
    $oidc->authenticate();
} else {
    $oidc->authenticate();
    $user = $oidc->requestUserInfo();
    // Store user info in session or database
    session_start();
    $_SESSION['user'] = $user;
    header('Location: quiz.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Quiz App</title>
    <link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Login to Quiz App</h1>
        <a href="<?php echo $oidc->getAuthorizationUrl(); ?>" class="btn">Login with OpenID Connect</a>
    </div>
</body>
</html>