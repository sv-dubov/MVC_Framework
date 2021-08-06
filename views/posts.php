<?php $title = 'Posts';
ob_start();
?>
<h2>List of posts</h2>
<div class="container">
    <div class="row">
        <div class="column">
            <h2>Title 1</h2>
            <p>Some text..</p>
        </div>
        <div class="column">
            <h2>Title 2</h2>
            <p>Some text..</p>
        </div>
        <div class="column">
            <h2>Title 2</h2>
            <p>Some text..</p>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require_once('layout.php'); ?>
