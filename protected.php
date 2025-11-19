<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<h2>Protected Page</h2>
<p>Welcome, <?php echo $_SESSION['user']; ?>! Only logged-in users can see this page.</p>

<a href="logout.php">Logout</a>
