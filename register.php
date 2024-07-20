<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Interior Website</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function checkPasswordMatch() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            var matchMessage = document.getElementById("matchMessage");

            if (password !== confirm_password) {
                matchMessage.innerHTML = "Passwords do not match.";
                return false;
            } else {
                matchMessage.innerHTML = "";
                return true;
            }
        }
    </script>
</head>
<body>
    <div class="register-container">
        <div class="register-form-container">
            <h2>Register</h2>
            <div id="matchMessage" style="color: red; font-weight: bold; margin-bottom: 10px;"></div>
            <form action="register_user.php" method="post" class="register-form" onsubmit="return checkPasswordMatch()">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" minlength="8" required>
                </div>
                <div class="input-group">
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" minlength="8" required>
                </div>
                <button type="submit">Register</button>
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>
