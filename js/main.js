// main.js
document.addEventListener('DOMContentLoaded', () => {
    // Add any global initialization code here
    console.log('Quiz App initialized');

    // Example: Add a logout button functionality
    const logoutButton = document.getElementById('logout-button');
    if (logoutButton) {
        logoutButton.addEventListener('click', () => {
            // Perform logout action (e.g., clear session, redirect to login page)
            window.location.href = 'logout.php';
        });
    }
});