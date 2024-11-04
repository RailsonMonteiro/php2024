<?php
    namespace veiculos;
    class veiculos {
        protected $marca;
        protected $modelo;
        protected $ano;
        protected $cor;

        public function  __construct($marca, $modelo,$ano, $cor) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->cor = $cor;
        }    

        public function __destruct()
        {
            echo "<p>O objeto {$this->marca} foi destruído.</p>";
        }

        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }
        public function setCor($cor) {
            $this->cor = $cor;
        }

        public function getMarcaModelo() {
            return "{$this->marca} {$this->modelo}";
        }

        public function dados() {
            return "A marca é {$this->marca}, o modelo é {$this->modelo}, o ano é {$this->ano} e a cor é {$this->cor}.";
        }

    } 

    class carro extends veiculos {
        private $placa;
        private $chassi;

        public function  __construct($marca, $modelo,$ano, $cor, $placa, $chassi) {
            parent::__construct($marca, $modelo,$ano, $cor);
            $this->placa = $placa;
            $this->chassi = $chassi;
        }
        public function dados() {
            return "A marca é {$this->marca}, o modelo é {$this->modelo}, o ano é {$this->ano}, a cor é {$this->cor}, a placa é {$this->placa} e o chassi é {$this->chassi}.";
        }    

        public function __destruct()
        {
            echo "<p>O objeto {$this->marca} foi destruído.</p>";
        }
        
    }

    class moto extends veiculos {
        private $placa;
        private $chassi;

        public function  __construct($marca, $modelo,$ano, $cor, $placa, $chassi) {
            parent::__construct($marca, $modelo,$ano, $cor);
            $this->placa = $placa;
            $this->chassi = $chassi;
        }
        public function dados() {
            return "A marca é {$this->marca}, o modelo é {$this->modelo}, o ano é {$this->ano}, a cor é {$this->cor}, a placa é {$this->placa} e o chassi é {$this->chassi}.";
        }    

        public function __destruct()
        {
            echo "<p>O objeto {$this->marca} foi destruído.</p>";
        }
    }
?>