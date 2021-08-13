<?php $title = 'Register';
ob_start();
?>
<h2>You were registered successfully</h2><br>
<?php $content = ob_get_clean();
require_once('../App/Views/layouts/layout.php'); ?>
