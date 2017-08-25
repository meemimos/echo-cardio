<?php

echo "<div class='col-sm-6 col-sm-offset-3 product-block'>
	<div class='col-sm-3'>Echo No: " . $record->id . "</div>"
	."<div class='col-sm-9 pull-right'>" . $record->created_at . "</div>"
	."<div class='image-box'>
	   <p>" . $record->first_name . "<p/>
	</div><hr>"
	."<p>Middle Name" . $record->middle_name . "</p>"
	."Last Name: " . $record->last_name .
	"<p class='margin-top'>" . $record->age . "</p>"
	."<p>Gender: " . $record->gender . "</p>"
    ."Referred by: " . $record->referred_by . "<br />"
	." <a href='record.php?id=" . $record->id . "'>View</a>
	<a href='edit.php?id=" . $record->id . "'>Edit</a>"
	.'<form action="confirm.php" method="post" onsubmit="return confirm(' . "'" . 'Are you sure you want to delete this record?' . "'" . ')";>' . ""
	.'<input type="submit" class="product-block-button" value="Delete">'
	.'<input type="text" value="' . $record->id . '" name="id" style="display:none;">' . "\n"
	.'<input type="text" value="delete" name="action" style="display:none;">' . "\n"
	.'</form>' . ""
	."</div>";

?>
