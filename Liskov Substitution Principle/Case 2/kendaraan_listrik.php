<?php

interface KendaraanListrik {
    public function menggunakanBaterai(): void;
}

class MobilListrik implements KendaraanListrik {
    public function menggunakanBaterai(): void {
        echo "Mobil Listrik menggunakan baterai\n";
    }
}

?>
