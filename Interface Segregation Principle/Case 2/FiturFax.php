<?php

interface FiturFax {
    public function terimaFax(): void;
}

class PrinterFlagship implements FiturFax {
    public function terimaFax(): void {
        echo "Fax received in Printer Flagship\n";
    }
}

?>
