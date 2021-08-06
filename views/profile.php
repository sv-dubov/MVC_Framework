<?php $title = 'Profile';
ob_start();
?>
<h2>Profile Page</h2><br>
<div class="container">
    <div class="row">
        <div>
            <br><img src="../public/img/user.jpg" class="profile-image">
            <form method="post" action="profile.php">
                <input type="file" id="avatar" name="avatar">
                <hr>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Edit username" name="username" id="username">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Edit email" name="email" id="email">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Confirm or change password" name="password" id="password">
                <button type="submit" class="registerBtn">Update</button>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require_once('layout.php'); ?>
