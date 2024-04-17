<?php

interface Shape3Dimension {
    public function calculateVolume(): void;
}

class Kubus implements Shape3Dimension {
    private Shape2Dimension $shape;

    public function __construct(Shape2Dimension $shape) {
        $this->shape = $shape;
    }

    public function calculateVolume(): void {
        echo "Volume of the cube calculated\n";
    }

    public function calculateArea(): void {
        echo "Area of the cube calculated\n";
        $this->shape->calculateArea();
    }
}

?>
