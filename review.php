<?php
session_start();

if (!isset($_SESSION['booking'])) {
    header("Location: booking.php");
    exit;
}

$booking = $_SESSION['booking'];
?>

<h2>Review Your Booking</h2>

<p>Name: <?php echo $booking['name']; ?></p>
<p>Date: <?php echo $booking['date']; ?></p>
<p>Guests: <?php echo $booking['guests']; ?></p>
<p>Room: <?php echo $booking['room']; ?></p>

<a href="confirm.php">Confirm Booking</a>
