<?php
include "config.php";
class DB{
    private static $conn;
    public static function connection1(){
        if (!isset(self::$conn)){
        try{
            self::$conn = new PDO('mysql:host='.DB_HOST.',dbname='.DB_NAME,DB_USER,DB_PASS);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
        }
        return self::$conn;
}
public static function prepare($query) {
    return self::connection()->prepare($query);

}
}
?>