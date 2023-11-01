<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Store the username and password in a plain text file
    $file = "user_accounts.txt";
    $data = "$username:$password\n";

    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo "Registration successful. You can now log in.";
    } else {
        echo "Registration failed. Please try again later.";
    }
}
?>
