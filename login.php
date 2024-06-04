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
    <form action="signin.php" method="post">
        <h1>SIGN IN</h1>
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
            <span class="add-on"><i class="fas fa-envelope"></i></span>
            <input class="span2" type="email" name="email" id="email" placeholder="Email address" required>
        </div>
        <div class="input-prepend">
            <span class="add-on"><i class="fas fa-lock"></i></span>
            <input class="span2" type="password" name="password" id="password" placeholder="Password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <span class="add-on toggle-password"><i class="fas fa-eye" id="togglePassword"></i></span>
        </div>
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
        <button type="submit">Submit</button>
        <hr>
        Create Account <a href="create.php">SIGN UP</a>
    </form>
</body>
</html>
