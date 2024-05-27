// JavaScript function to redirect to login.php after 3 seconds
function redirectToLogin() {
  setTimeout(function () {
    window.location.href = "login.php";
  }, 5000); // 1000 milliseconds = 1 second
}

// Call the redirectToLogin function when the page loads
window.onload = redirectToLogin;
