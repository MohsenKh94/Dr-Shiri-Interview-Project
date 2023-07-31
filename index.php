<?php

header("Content-Type: text/plain");

require_once 'classes/Shape.php';
require_once 'classes/Circle.php';
require_once 'classes/Square.php';
require_once 'classes/Rectangle.php';
require_once 'classes/ShapeFactory.php';

use Shapes\ShapeFactory;

$circle = ShapeFactory::createShape('circle', ['radius' => 5]);
echo "Circle Area: " . $circle->getArea() . "\n";
echo "Circle Perimeter: " . $circle->getPerimeter() . "\n";

$square = ShapeFactory::createShape('square', ['side' => 4]);
echo "Square Area: " . $square->getArea() . "\n";
echo "Square Perimeter: " . $square->getPerimeter() . "\n";

$rectangle = ShapeFactory::createShape('rectangle', ['width' => 3, 'height' => 6]);
echo "Rectangle Area: " . $rectangle->getArea() . "\n";
echo "Rectangle Perimeter: " . $rectangle->getPerimeter() . "\n";
