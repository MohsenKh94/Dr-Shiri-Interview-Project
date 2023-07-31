<?php

namespace Shapes;

class ShapeFactory {
    public static function createShape(string $shapeType, array $params): ?Shape {
        switch ($shapeType) {
            case 'circle':
                return new Circle($params['radius']);
            case 'square':
                return new Square($params['side']);
            case 'rectangle':
                return new Rectangle($params['width'], $params['height']);
            default:
                return null;
        }
    }
}
