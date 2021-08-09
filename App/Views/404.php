<?php $title = 'Error 404';
ob_start();
?>
<h1>Error 404. Page not found</h1>
<p>Sorry, that page doesn't exist.</p>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
