<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['booking'] = [
        "name" => $_POST['name'],
        "date" => $_POST['date'],
        "guests" => $_POST['guests'],
        "room" => $_POST['room']
    ];
    header("Location: review.php");
    exit;
}
?>

<h2>Hotel Booking</h2>
<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Date: <input type="date" name="date"><br><br>
    Guests: <input type="number" name="guests"><br><br>
    Room Type:
    <select name="room">
        <option value="Standard">Standard</option>
        <option value="Deluxe">Deluxe</option>
        <option value="Suite">Suite</option>
    </select><br><br>

    <button type="submit">Next</button>
</form>
