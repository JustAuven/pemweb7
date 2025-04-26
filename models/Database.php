<?php
class Database {
    private static $host = 'localhost:3306';
    private static $db_name = 'pemweb6';
    private static $username = 'root';
    private static $password = '145689';
    public static $conn;

    public static function connect() {
        if (!self::$conn) {
            self::$conn = new mysqli(self::$host, self::$username, self::$password, self::$db_name);
            if (self::$conn->connect_error) {
                die("Connection failed: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
}
?>
