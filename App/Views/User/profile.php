<?php $title = 'Profile';
ob_start();
?>
<h2>Profile Page</h2><br>
<div class="container">
    <div class="row">
        <div>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <dl>
                    <dt>Name:</dt>
                    <dd><?php echo $user->name; ?></dd>
                    <dt>Email:</dt>
                    <dd><?php echo $user->email; ?></dd>
                </dl>
            <?php endif; ?>
        </div>
        <div>
            <?php if (!isset($user->image)) : ?>
                <br><img src="../public/img/no-image.png" class="profile-image">
                <hr>
            <?php else : ?>
                <br><img src="../public/uploads/<?php echo $user->image; ?>" class="profile-image">
                <hr>
            <?php endif; ?>
        </div>
    </div>
    <a href="/user/edit">Edit Profile</a>
</div>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
