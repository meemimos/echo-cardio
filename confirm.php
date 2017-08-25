<?php
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

<div class="single-record">

    <div>
        <?php
            require_once('model/connection.php');
            require_once('controller/recordscontroller.php');
            include 'model/records.php';

            if($_POST['action'] == 'create'){
                if((isset($_POST['first_name']) && !empty($_POST['first_name'])) &&
                    (isset($_POST['last_name']) && !empty($_POST['last_name'])) &&
                    (isset($_POST['age']) && !empty($_POST['age'])) &&
                    (isset($_POST['gender']) && !empty($_POST['gender']))
                ) {
                    RecordsController::create(
                    $_POST['first_name'],
                    $_POST['middle_name'],                    
                    $_POST['last_name'],
                    $_POST['age'],
                    $_POST['gender'],
                    $_POST['referred_by']
                    );
                } else {
                    echo "<p>Input Error</p>";
                }
                
            } else {
                echo "<p>action error</p>";
            }
        ?>
    </div>
</div>