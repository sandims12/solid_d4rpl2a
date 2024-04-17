<?php

interface BarangElektronik {
    public function beroperasi(): void;
    public function berhenti(): void;
}

class Saklar {
    private BarangElektronik $item;
    private bool $keaktifan = false;

    public function __construct(BarangElektronik $item) {
        $this->item = $item;
    }

    public function berubah(): void {
        $this->keaktifan = !$this->keaktifan;
        if ($this->keaktifan) {
            $this->item->beroperasi();
        } else {
            $this->item->berhenti();
        }
    }
}

?>
