<?php
class RecordsController {

    public static function printAll() {
        $recordList = Record::getAll();
        require_once('view/allrecords.php');
    }

    public static function printSingle($id) {
        $record = Record::getSingle($id);
        require_once('view/singlerecord.php');
    }

    public static function successMessage() {
        echo "<div class='confirmation center'><br />Successfully created new record</div>";
    }

    public static function getSingle($id) {
        return Record::getSingle($id);
    }

    public static function create($first_name, $middle_name, $last_name, $age, $gender, $referred_by){
        Record::create($first_name, $middle_name, $last_name, $age, $gender, $referred_by);
        self::successMessage();
        $last_id = Database::getInstance()->lastInsertId();
        self::printSingle($last_id);
    }

    
}