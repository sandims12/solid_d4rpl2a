<?php

include_once "FiturCetak.php";
include_once "FiturScan.php";

class PrinterMidRange {
    private FiturCetak $fiturCetak;
    private FiturScan $fiturScan;

    public function __construct(FiturCetak $fiturCetak, FiturScan $fiturScan) {
        $this->fiturCetak = $fiturCetak;
        $this->fiturScan = $fiturScan;
    }

    public function cetakKertas(): void {
        $this->fiturCetak->cetakKertas();
    }

    public function scanKertas(): void {
        $this->fiturScan->scanKertas();
    }
}

?>
