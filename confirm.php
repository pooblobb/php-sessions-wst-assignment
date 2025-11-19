<?php
session_start();

if (!isset($_SESSION['booking'])) {
    header("Location: booking.php");
    exit;
}

$booking = $_SESSION['booking'];

session_destroy(); // Clear session after confirming
?>

<h2>Booking Confirmed!</h2>
<p>Thanks, <?php echo $booking['name']; ?>. Your room has been booked.</p>
