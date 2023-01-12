<?php

require_once('./GLOBALS.inc');

$app = new APP(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
class APP extends PDO
{
    function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
    {
        try {
            $this->db = new PDO("{$DB_TYPE}:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
