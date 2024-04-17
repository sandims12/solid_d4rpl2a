<?php

interface KendaraanBBM {
    public function menggunakanBBM(): void;
}

class Mobil implements KendaraanBBM {
    public function menggunakanBBM(): void {
        echo "Mobil menggunakan BBM\n";
    }
}

?>
