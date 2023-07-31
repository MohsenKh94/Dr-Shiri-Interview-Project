<?php

namespace Shapes;

class Circle implements Shape {
    private $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return M_PI * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * M_PI * $this->radius;
    }
}
