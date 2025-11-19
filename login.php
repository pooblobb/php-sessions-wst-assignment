<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "admin" && $password === "1234") {
        $_SESSION['user'] = $username;
        header("Location: protected.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<h2>Login</h2>
<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>

<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
