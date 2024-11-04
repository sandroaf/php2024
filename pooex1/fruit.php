<?php
class fruit {
        private $name;
        private $color;

        public function  __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }    

        public function __destruct()
        {
            echo "<p>O objeto {$this->name} foi destruído.</p>";
        }

        public function setName($name) {
            $this->name = $name;
        }
        public function setColor($color) {
            $this->color = $color;
        }

        public function dados() {
            return "A fruta é um(a) {$this->name} e sua cor é {$this->color}.";
        }
    }
?>