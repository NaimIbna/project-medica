<?php

class DB_CONNECTION extends PDO
{
    private $mydb = "
(DESCRIPTION =
(ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
(CONNECT_DATA =
(SERVER = DEDICATED)
(SERVICE_NAME = XE)
)
)";
    public $conn;
    function __construct($username, $password)
    {
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,

        ];

        try {
            parent::__construct("oci:dbname=" . $this->mydb, $username, $password, $opt);
            $this->conn = $this;
        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
    }
}


// class DB_CONNECTION
// {
//     private static
//         $mydb = "
// (DESCRIPTION =
// (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
// (CONNECT_DATA =
// (SERVER = DEDICATED)
// (SERVICE_NAME = XE)
// )
// )";
//     private $conn;

//     function __construct($username, $password)
//     {


//         $conn_username = $username;
//         $conn_password = $password;

//         $opt = [
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,

//         ];

//         try {
//             $conn = new PDO("oci:dbname=" . $this->mydb, $conn_username, $conn_password, $opt);
//         } catch (PDOException $e) {
//             echo ($e->getMessage());
//         }
//     }

//     public function getConnection()
//     {
//         return $this->conn;
//     }

//     public function 
// }
