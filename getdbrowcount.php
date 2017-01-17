<?php
/**
 * Creates Unsynced MySQL DB rows count as JSON
 */
    include_once 'db_functions.php';
    $db = new DB_Functions();
    $antenas = $db->getAllRows();
    $a = array();
    $b = array();
    if ($antenas != false){
        $no_of_antenas = mysql_num_rows($antenas);      
        $b["count"] = $no_of_antenas;
        echo json_encode($b);
    }
    else{
        $no_of_antenas = 0;
        $b["count"] = $no_of_antenas;
        echo json_encode($b);
    }
?>