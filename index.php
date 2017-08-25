<?php
include 'layouts/header.php';
include 'layouts/nav.php'
?>

<container class="records">
	<?php
		require_once('model/connection.php');
		require_once('controller/recordscontroller.php');
		include 'model/records.php';
		RecordsController::printAll();
		
	?>
</container>

<?php
include 'layouts/footer.php';
?>
