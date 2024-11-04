<?php 
    namespace pessoa;

    class pessoa {
        protected $nome;
        protected $sobrenome;
        protected $idade;
        protected $sexo;

        public function  __construct($nome, $sobrenome,$idade, $sexo) {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }    

        public function __destruct()
        {
            echo "<p>O objeto {$this->nome} foi destruído.</p>";
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setSobrenome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }
        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public function getNomeCompleto() {
            return "{$this->nome} {$this->sobrenome}";
        }

        public function dados() {
            return "O nome é {$this->getNomeCompleto()}, a idade é {$this->idade} e o sexo é {$this->sexo}.";
        }

    } 

    class aluno extends pessoa {
        private $matricula;
        private $curso;

        public function  __construct($nome, $sobrenome,$idade, $sexo, $matricula, $curso) {
            parent::__construct($nome, $sobrenome,$idade, $sexo);
            $this->matricula = $matricula;
            $this->curso = $curso;
        }    

        public function __destruct()
        {
            echo "<p>O objeto {$this->nome} foi destruído.</p>";
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

        public function setCurso($curso) {
            $this->curso = $curso;
        }

        public function getMatricula() {
            return $this->matricula;
        }

        public function getCurso() {
            return $this->curso;
        }

        public function dados() {
            return "O nome é {$this->getNomeCompleto()}, a idade é {$this->idade}, o sexo é {$this->sexo}, a matrícula é {$this->matricula} e o curso é {$this->curso}.";
        }
    }
?>