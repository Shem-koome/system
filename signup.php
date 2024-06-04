<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = ($_POST['password']); // Hash the password
    $phone_number = $mysqli->real_escape_string($_POST['phone_number']);
    
    // Prepare the SQL statement
    $sql = "INSERT INTO logins (username, email, password, phone_number) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Error preparing statement: " . $mysqli->error);
    }

    // Bind the parameters
    $stmt->bind_param("ssss", $username, $email, $password, $phone_number);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to login page after successful registration
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$mysqli->close();
?>
