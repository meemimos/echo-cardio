<?php

    $result = "";
    foreach($recordList as $record) {
        $result = $result . $record->id . $record->first_name;

    }

    echo '<div>' . $result . '</div>';
?>