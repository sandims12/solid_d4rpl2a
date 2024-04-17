<?php

interface Shape2Dimension {
    public function calculateArea(): void;
}

class Persegi implements Shape2Dimension {
    public function calculateArea(): void {
        echo "Area of the square calculated\n";
    }
}

?>
