<?php

include_once "dbms.php";

class MySQL extends DBMS {
    public function createConnection(): void {
        echo "Connection to MySQL established\n";
    }
}

class MongoDB extends DBMS {
    public function createConnection(): void {
        echo "Connection to MongoDB established\n";
    }
}

?>
