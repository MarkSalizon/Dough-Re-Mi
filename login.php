<?php
session_start();
require "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];

    $query = mysqli_query($conn, "SELECT id, name, password FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($query);

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["name"];
        header("Location: home.php");
        exit;
    } else {
        echo "<script>alert('Invalid email or password'); window.location='index.php';</script>";
    }
}
?>
