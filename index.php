<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILLIONAIRE'S EMPLOYEES FORM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="script.js"></script>

</head>
<body>
    <form action="signup.php" method="post">
        <h1>SIGN UP</h1>

        <?php
        if (isset($_GET['error'])) {
            $error = htmlspecialchars($_GET['error']);
            if ($error == 'invalid_password') {
                echo '<p style="color:red;">Invalid Email or password. Please try again.</p>';
            } elseif ($error == 'account_not_found') {
                echo '<p style="color:red;">Account not found. Please create an account.</p>';
            }
        }
        ?>
        <div class="input-prepend">
            <span class="add-on"><i class="fas fa-user"></i></span>
            <input class="span2" type="text" name="username" id="username" placeholder="Username" required>
        </div>

        <div class="input-prepend">
            <span class="add-on"><i class="fas fa-envelope"></i></span>
            <input class="span2" type="email" name="email" id="email" placeholder="Email address" required>
        </div>

        <div class="input-prepend">
            <span class="add-on"><i class="fas fa-lock"></i></span>
            <input class="span2" type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <span class="add-on toggle-password"><i class="fas fa-eye" id="togglePassword"></i></span>
        </div>

        <div class="input-prepend">
            <span class="add-on"><i class="fas fa-key"></i></span>
            <input class="span2" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
        </div>

        <div class="input-prepend">
            <span class="add-on"><i class="fas fa-phone"></i></span>
            <input class="span2" type="text" name="phone_number" id="phone_number" placeholder="Phone Number" required>
        </div>

        <button type="submit">Submit</button>

        <hr>
        Already have an account? <a href="login.php">SIGN IN</a>
    </form>

    <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>


</body>
</html>
