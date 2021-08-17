<div class="topnav">
    <a class="active" href="/">Home</a>
    <a href="/post/index">Posts</a>
    <?php if (isset($_SESSION['user_id'])) : ?>
        <a href="/user/profile">Profile</a>
        <a href="/auth/logout">Welcome, <?php echo $user->name; ?>! Log out</a>
    <?php else : ?>
        <a href="/auth/register">Register</a>
        <a href="/auth/login">Login</a>
    <?php endif; ?>
</div>
