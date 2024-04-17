<?php

include_once "Mahasiswa.php";

class MahasiswaView {
    public function showMahasiswa(Mahasiswa $mhs): void {
        echo "NIM: " . $mhs->getNim() . ", Nama: " . $mhs->getNama() . "\n";
    }
}
?>
