<?php

class DB_CONNECTION
{
    public $conn;

    public function __construct($username, $password)
    {
        $this->conn = oci_connect($username, $password, 'localhost/XE');

        if (!$this->conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function reconnect($username, $password)
    {
        $this->conn = oci_connect($username, $password, 'localhost/XE');

        if (!$this->conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
    }

    public function execute_sql($query)
    {
        $stid = oci_parse($this->conn, $query);
        oci_execute($stid);
        // oci_fetch_all($stid, $res);
        // echo json_encode($res);
        return $stid;
    }
}
