<div class="topnav">
    <a class="active" href="/">Home</a>
    <a href="/post/index">Posts</a>
    <a href="/auth/register">Register</a>
    <?php if (isset($_SESSION['user_name'])) : ?>
        <a href="/user/profile">Profile</a>
        <a href="/auth/logout">Welcome, <?php echo $_SESSION['user_name']; ?>! Log out</a>
    <?php else : ?>
        <a href="/auth/login">Login</a>
    <?php endif; ?>
</div>
