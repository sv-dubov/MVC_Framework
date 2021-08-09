<?php $title = 'Register';
ob_start();
?>
<h2>Register Page</h2><br>
<form id="register" method="post" action="register.php">
    <div class="container">
        <p>Please, fill in this form to create an account.</p>
        <hr>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="username" id="username" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="password" id="password" required>
        <button type="submit" class="registerBtn">Register</button>
    </div>
    <div class="container signIn">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
