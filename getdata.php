<?php


public function getAllRows() {
        $result = mysql_query("select * FROM antenas");
        return $result;
    }
    
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