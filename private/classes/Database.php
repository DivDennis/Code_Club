<?php
/** 
 * Database model
 */
public class Database{
    private static $instance = null;

    /**
     * return connection to database
     * @return Mysqli Connection
     */
    public static function getInstance(){
        if(self::$instance == null){
             self::$instance = new Mysqli("localhost", "root", "" , "coding_society");
            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
        }
        return self::$instance;
    }
}


?>