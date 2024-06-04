<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = ($_POST['password']); // Assuming password is not hashed in the database
    
    // Prepare the SQL statement
    $sql = "SELECT * FROM logins WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) {
        die("Error preparing statement: " . $mysqli->error);
    }

    // Bind the parameters
    $stmt->bind_param("s", $email);

    // Execute the statement
    if ($stmt->execute()) {
        // Get the result
        $result = $stmt->get_result();
        
        // Check if a row was returned
        if ($result->num_rows === 1) {
            // Fetch the row
            $row = $result->fetch_assoc();
            
            // Verify the password
            if ($password === $row['password']) { // Password comparison, assuming not hashed
                // Password is correct, set session variables and redirect to dashboard
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                header("Location: ../dashboard/dashboard.php");
                exit();
            }else {
                // Invalid password
                header("Location: login.php?error=invalid_password");
                exit();
            }
        } else {
            // Account not found
            header("Location: create.php?error=account_not_found");
            exit();
        }
        
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$mysqli->close();
?>
