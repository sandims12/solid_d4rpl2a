<?php

include_once "FiturFax.php";
include_once "FiturCetak.php";
include_once "FiturScan.php";

class PrinterFlagship {
    private FiturFax $fiturFax;
    private FiturCetak $fiturCetak;
    private FiturScan $fiturScan;

    public function __construct(FiturFax $fiturFax, FiturCetak $fiturCetak, FiturScan $fiturScan) {
        $this->fiturFax = $fiturFax;
        $this->fiturCetak = $fiturCetak;
        $this->fiturScan = $fiturScan;
    }

    public function terimaFax(): void {
        $this->fiturFax->terimaFax();
    }

    public function cetakKertas(): void {
        $this->fiturCetak->cetakKertas();
    }

    public function scanKertas(): void {
        $this->fiturScan->scanKertas();
    }
}

?>
