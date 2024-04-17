<?php

interface TipePembayaran {
    public function memprosesPembayaran(): void;
}

class Debit implements TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan Debit diproses\n";
    }
}

class Kredit implements TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan Kredit diproses\n";
    }
}

class Cash implements TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan Cash diproses\n";
    }
}
?>
