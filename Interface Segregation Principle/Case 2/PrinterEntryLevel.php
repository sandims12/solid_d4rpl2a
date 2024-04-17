<?php

include_once "FiturCetak.php";

class PrinterEntryLevel {
    private FiturCetak $fiturCetak;

    public function __construct(FiturCetak $fiturCetak) {
        $this->fiturCetak = $fiturCetak;
    }

    public function cetakKertas(): void {
        $this->fiturCetak->cetakKertas();
    }
}

?>
