<?php
    //Classe
    class Alunos{
        public $nome;
        private $matricula;
        private $media;

        //Construção da classe
        function __construct(string $nome, int $matricula,float $media = 0)
        {
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->media = $media;
        }

        //Metódo da classe
        function media(float $notaFinal): void
        {
            if($notaFinal >= 0 & $notaFinal <= 10) $this->media = $notaFinal;
            else echo "media invalida\n";
        }
    }

    $aluno = new Alunos("Carlos","123456");
    $aluno->media(-5.5);
    print_r($aluno);

    $aluno->media(6);
    print_r($aluno);


?>