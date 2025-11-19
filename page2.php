<?php
session_start();


if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}

$_SESSION['visits']++;
?>

<h2>Page 2</h2>
<p>You have visited this website <strong><?php echo $_SESSION['visits']; ?></strong> times during this session.</p>

<a href="page1.php">Back to Page 1</a><br>
<a href="reset.php">Reset Visits</a>
