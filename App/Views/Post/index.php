<?php $title = 'Posts';

//include_once('../posts_arr.php');

ob_start();
?>
<h2>List of posts</h2>
<div class="container">
    <div class="row">
        <?php foreach ($posts as $post) : ?>
            <div class="column">
                <h3><?php echo $post['title']; ?></h3>
                <p><?php echo $post['content']; ?></p>
                <p>Date: <i><?php echo $post['created_at']; ?></i></p>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
