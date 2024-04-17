<?php

include_once "tipe_pembayaran.php";

class PembayaranCustomer {
    private TipePembayaran $tipePembayaran;

    public function menerimaPembayaran(TipePembayaran $tipe): void {
        $this->tipePembayaran = $tipe;
    }

    public function prosesPembayaran(): void {
        $this->tipePembayaran->memprosesPembayaran();
    }
}
?>
