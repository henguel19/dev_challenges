<?php
    interface Poligono {
        public function getArea(): float;
    }
    
    class Triangulo implements Poligono {
        public function __construct(
            private float $base,
            private float $altura,
            ){}
            
        public function getArea(): float {
            return ($this->base * $this->altura) / 2;
        }
    }
    
    class Cuadrado implements Poligono {
        public function __construct(
            private float $lado1,
            private float $lado2,
            ){}
        
        public function getArea(): float {
            return $this->lado1 * $this->lado2;
        }
    }
    
    class Rectangulo implements Poligono {
        public function __construct(
            private float $largo,
            private float $ancho,
            ){}
        
        public function getArea(): float {
            return $this->largo * $this->ancho;
        }
    }
    
    echo (new Triangulo(3, 4))->getArea() . "<br/>"; //6
    echo (new Cuadrado(4, 4))->getArea() . "<br/>"; //16
    echo (new Rectangulo(5, 4))->getArea() . "<br/>"; //20
?>
