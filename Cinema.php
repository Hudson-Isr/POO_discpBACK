<?php

class Cliente
{
    public $nome;
    public $idade;
    public $ingress;

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($name)
    {
        $this->nome = $name;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($age)
    {
        $this->idade = $age;
    }

    public function getIngresso()
    {
        return $this->ingress;
    }
    public function setIngresso($tickt)
    {
        $this->ingress = $tickt;
    }
}

class Ingresso
{
    public $nub_ingresso;
    public $valor_ingresso;

    public function getNub_ingresso()
    {
        return $this->nub_ingresso;
    }

    public function getValor_ingresso()
    {
        return $this->valor_ingresso;
    }
}

$usuario = new Cliente();
$userTickt = new Ingresso();

while (true) {
    echo "\n*******************\n\n";
    echo "1 - Criar Usuário.\n";
    echo "2 - Verificar filme.\n";
    echo "3 - Comprar Ingresso.\n";
    echo "4 - Verificar Usuário.\n";
    echo "5 - Sair.\n";
    echo "\n*******************\n\n";

    $test = readline();

    if ($test <= 0) {
        break;
    }
    if ($test == 1) {
        echo "\nPara criar o usuário, primeiro digite seu Nome:\n";

        $usuario->setNome(readline());
        echo "Agora digite sua idade:\n";

        $usuario->setIdade(readline());
        echo "\nUsuário criado com sucesso!\n\n";
    } elseif ($test == 2) {
        echo "\nfilmes em cartaz: \n\n";
        echo "*******************\n";
        echo "1 - Panico 6, Classificação 18, Sala 1\n";
        echo "2 - Shazam!, Classificação 12, Sala 2\n";
        echo "3 - Creed III, Classificação 12, Sala 3\n";
        echo "4 - Jhon Wick, Classificação 16, Sala 4\n";
        echo "*******************\n\n";
    } elseif ($test == 3) {
        if ($usuario->getNome() == "" and $usuario->getIdade() == "") {
            echo "Nenhum usuário cadastrado.\n\n";
        } else {
            echo "*******************\n";
            echo "1 - Panico 6, Classificação 18, Sala 1 --- Valor:R$ 23,00 \n";
            echo "2 - Shazam!, Classificação 12, Sala 2 --- Valor:R$ 14,00 \n";
            echo "3 - Creed III, Classificação 12, Sala 3 --- Valor:R$ 14,00\n";
            echo "4 - Jhon Wick, Classificação 16, Sala 4 --- Valor:R$ 18,00\n";
            echo "*******************\n\n";
            echo "\nDigite o número do filme que deseja Comprar:\n";
            $num_tickt = readline();
            if ($num_tickt == 1) {
                if ($usuario->getIdade() >= 18) {
                    echo "\nIngresso comprado com sucesso!\n";
                    echo "Assista seu filme na SALA 1!\n";
                } else
                    echo "\nFora da faixa etária de idade.\n\n";
            }
            if ($num_tickt == 2) {
                if ($usuario->getIdade() >= 12) {
                    echo "\nIngresso comprado!\n\n";
                    echo "Assista seu filme na SALA 2!\n";
                } else
                    echo "\nFora da faixa etária de idade.\n\n";
            }
            if ($num_tickt == 3) {
                if ($usuario->getIdade() >= 12) {
                    echo "\nIngresso comprado!\n\n";
                    echo "Assista seu filme na SALA 3!\n";
                } else
                    echo "\nFora da faixa etária de idade.\n\n";
            }
            if ($num_tickt == 4) {
                if ($usuario->getIdade() >= 16) {
                    echo "\nIngresso comprado!\n\n";
                    echo "Assista seu filme na SALA 4!\n";
                } else
                    echo "\nFora da faixa etária de idade.\n\n";
            }
        }
    } elseif ($test == 4) {
        if ($usuario->getNome() == "" and $usuario->getIdade() == "") {
            echo "Nenhum usuário cadastrado.\n\n";
        } else {
            echo "Nome:" . $usuario->getNome() . " Idade:" . $usuario->getIdade() . "\n\n";
        }
    } elseif ($test == 5) {
        break;
    } else
        echo "Número não identificado, tente novamente.";
}
