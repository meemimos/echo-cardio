<?php
include 'layouts/header.php';
include 'layouts/nav.php'
?>

<?php
	require_once('model/connection.php');
	require_once('controller/recordscontroller.php');
	include 'model/records.php';
?>

<container class="row">
	<?php

	if (!isset($_GET['id'])){
		echo "No id requested";
	}else{
	    RecordsController::printSingle($_GET['id']);
	}

	?>
</container>


<?php
include 'layouts/footer.php';
?>
