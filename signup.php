<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Sign Up</h2>
        <form id="signupForm" action="signup_process.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
                <div id="usernameError" class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="fa fa-eye"></i></button>
                    </div>
                </div>
                <div id="passwordError" class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                <div id="confirmPasswordError" class="invalid-feedback"></div>
            </div>
            <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
        </form>
        <p class="mt-3">Already have an account? <a href="login.php">Login</a></p>
    </div>

    <script>
        $(document).ready(function() {
            // Function to toggle password visibility
            $('#togglePassword').click(function() {
                var passwordInput = $('#password');
                var passwordIcon = $(this).find('i');
                var passwordType = passwordInput.attr('type');
                if (passwordType === 'password') {
                    passwordInput.attr('type', 'text');
                    passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });

            // Function to validate form
            $('#signupForm').submit(function(event) {
                var username = $('#username').val();
                var password = $('#password').val();
                var confirmPassword = $('#confirm_password').val();

                // Reset error messages
                $('.invalid-feedback').text('');

                // Validation
                if (username.length < 6) {
                    $('#usernameError').text('Username must be at least 6 characters long.');
                    event.preventDefault();
                }
                if (password.length < 8) {
                    $('#passwordError').text('Password must be at least 8 characters long.');
                    event.preventDefault();
                }
                if (password !== confirmPassword) {
                    $('#confirmPasswordError').text('Passwords do not match.');
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
