<?php $title = 'Posts';

include_once('../posts_arr.php');

ob_start();
?>
<h2>List of posts</h2>
<div class="container">
    <div class="row">
        <?php foreach ($posts as $post) : ?>
            <div class="column">
                <?php foreach ($post as $key => $value) : ?>
                    <h3><?php echo $value; ?></h3>
                <?php endforeach; ?>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>
<?php $content = ob_get_clean();
require_once('layout.php'); ?>
