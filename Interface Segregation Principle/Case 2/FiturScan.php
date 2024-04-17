<?php

interface FiturScan {
    public function scanKertas(): void;
}

class PrinterMidRange implements FiturScan {
    public function scanKertas(): void {
        echo "Scanning in Printer Mid Range\n";
    }
}

?>
