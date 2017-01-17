<?php
/**
 * Creates Unsynced rows data as JSON
 */
    include_once 'db_functions.php';
    $db = new DB_Functions();
    $antenas = $db->getAllRows();
    $a = array();
    $b = array();
    if ($antenas != false){
        while ($row = mysql_fetch_array($antenas)) {      
            $b["id"] = $row["ID"];
            $b["estado"] = $row["Estado"];
            array_push($a,$b);
        }
        echo json_encode($a);
    }
?>