<?php

interface FiturCetak {
    public function cetakKertas(): void;
}

class PrinterFlagship implements FiturCetak {
    public function cetakKertas(): void {
        echo "Printing in Printer Flagship\n";
    }
}

class PrinterMidRange implements FiturCetak {
    public function cetakKertas(): void {
        echo "Printing in Printer Mid Range\n";
    }
}

class PrinterEntryLevel implements FiturCetak {
    public function cetakKertas(): void {
        echo "Printing in Printer Entry Level\n";
    }
}

?>
