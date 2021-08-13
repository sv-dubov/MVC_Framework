<?php $title = 'Login';
ob_start();
?>
<h2>Login Page</h2><br>
<form id="login" method="post" action="/auth/enter">
    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="password" id="password" required>
        <button type="submit" class="registerBtn">Go!</button>
    </div>
    <div class="container signIn">
        <p>Haven't an account? <a href="/auth/register">Sign up</a>.</p>
    </div>
</form>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
