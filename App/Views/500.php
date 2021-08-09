<?php $title = 'Error 500';
ob_start();
?>
<h1>An error occurred</h1>
<p>Sorry, an error has occurred.</p>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
