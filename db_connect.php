<?php

 
    require('config.php');
 
    // Connecting to database
    function connect() {
        
        // connecting to mysql
        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        // selecting database
        mysql_select_db(DB_DATABASE);
 
        // return database handler
        return $con;
    }
 
    // Closing database connection
    function close() {
        mysql_close();
    }
 
 connect();
?>