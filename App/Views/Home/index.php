<?php $title = 'Home';
ob_start();
?>
<h2>This is Home page</h2>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
