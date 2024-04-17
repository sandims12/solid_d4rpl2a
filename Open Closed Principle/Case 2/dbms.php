<?php

class DBMS {
    public function createConnection(): void {
        echo "Connection to DBMS established\n";
    }
}

class DBMSConnection {
    private DBMS $dbms;

    public function connect(DBMS $dbms): void {
        $this->dbms = $dbms;
        echo "Connected to " . get_class($dbms) . "\n";
    }
}

?>
