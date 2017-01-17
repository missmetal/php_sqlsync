<?php
/**
 * DB operations functions
 */
class DB_Functions {
 
    private $db;
 
    //put your code here
    // constructor
    function __construct() {
        include_once './db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
 
    }
 
    /**
     * Storing new user
     * returns user details
     */
    public function storeAntena($antena) {
        // Insert user into database
        $result = mysql_query("INSERT INTO user(Name) VALUES('$antena')");
 
        if ($result) {
            return true;
        } else {            
                // For other errors
                return false;
        }
    }
     /**
     * Getting all rows
     */
    public function getAllRows() {
        $result = mysql_query("select * FROM antenas");
        return $result;
    }
    

}
 
?>