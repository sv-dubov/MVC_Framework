<?php $title = 'Home';
ob_start();
?>
<h2>This is Home page</h2>
<?php if (isset($_SESSION['user_name'])) : ?>
    <h3>Welcome, <?php echo $_SESSION['user_name']; ?>!</h3>
    <a href="/auth/logout">Log out</a>
<?php else : ?>
    <a href="/auth/register">Register</a> or <a href="/auth/login">Login</a>
    <br><br>
<?php endif; ?>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
