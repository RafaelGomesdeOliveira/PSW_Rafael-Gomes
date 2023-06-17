<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        body {
            background-image: linear-gradient(to right, rgb(234, 234, 234), rgb(196, 196, 196));


        }

        h2 {
            font-size: 1.25em;
            color: #16524e;
        }

        hr {
            margin: 0px 0px 10px 0px;

        }

        h3 {
            font-size: 1.1em;
            color: #16524e;
            margin: 0px 0px 10px 0px;
        }

        pre {
            font-size: 0.9em;

        }

        header {
            padding: 0px;
            margin: 0px;

        }


        .titulo {
            background-color: #16524e;
            color: white;
            text-align: center;
            height: 20vh;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .titulo>div#h1Centro {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .conteudo {
            display: flex;
            align-items: center;
            flex-direction: column;
            height: auto;
            margin: 50px 0px 100px 0px;


        }

        .conteudo>div {
            border-radius: 20px;
            padding: 30px 15px 30px 15px;
            width: 60vw;
            background-color: #84bab7da;
            color: black;
            margin-bottom: 50px;

            font-size: 0.9em;

        }
    </style>
</head>

<body>
    <header class="titulo">
        <div id="h1Centro">
            <h1>Atividades - Array</h1>
        </div>
    </header>

    <section class="conteudo">
        <div>
            <h3></h3>
            <hr>
            <?php
            $aluno = array(


                'PSW1' => array(
                    'Avaliação' => 45,
                    'Teste' => 50
                ),
                'BD' => array(
                    'Avaliação 1' => 27,
                    'Tabalho' => 30,
                    'Avaliação 2' => 21,
                    'Atividades' => 10
                ),
                'ASW' => array(
                    'Participação' => 8,
                    'Avaliação 1' => 26,
                    'Avaliação 2' => 22,
                    'Seminário' => 26,
                ),
                'Redes de Computadores' => array(
                    'Prova 1' => 35,
                    'Prova 2' => 50
                ),
                'Projeto Integrador' => array(
                    'Prova 1' => 45,
                    'Prova 2' => 35

                )
            );
            echo "<pre>";
            print_r($aluno);
            echo "</pre>";
            ?>

        </div>

        <div>

            <h3>Imprimindo a média de apenas um disciplina, utilizando o foreach</h3>
            <hr>
            <?php
            $media = 0;
            foreach ($aluno as $materia => $notas) {
                if ($materia == 'Redes de Computadores') {
                    echo "$materia" . "<br>";

                    foreach ($notas as $copiaNota => $valores) {
                        echo "$copiaNota: $valores" . "<br>";
                        $media += $valores;
                    }

                }


            }
            $media = $media /2;
            echo "$media";
            $media = 0;
            ?>

        </div>

        <h2>Funções - Array</h2>
        <div>
            <?php
            $array = [
                'Pessoa 1' => [
                    'id' => 1,
                    'nome' => 'Zeca',
                    'idade' => 42
                ],
                'Pessoa 2' =>
                [
                    'id' => 2,
                    'nome' => 'Jao',
                    'idade' => 32
                ],
                'Pessoa 3' =>
                [
                    'id' => 3,
                    'nome' => 'mareia',
                    'idade' => 50
                ]
            ];


            echo "<pre>";
            print_r($array);
            echo "</pre>";
            ?>
        </div>

        <div>
            <h3>Count - Conta quantos itens tem</h3>
            <hr>
            <?php
            $quant = count($array);
            echo "$quant";
            ?>

        </div>

        <div>
            <h3>Array_Key - Fala em que chave a detemrinada chave se encontra</h3>
            <hr>
            <?php
            echo "<pre>";
            print_r(array_keys($array));
            echo "</pre>";

            ?>
        </div>

        <div>
            <h3>Array_values - Mostra a posição de cada valor</h3>
            <hr>
            <?php
            echo "<pre>";
            print_r(array_values($array));
            echo "</pre>";
            ?>
        </div>

        <div>
            <h3>In_array - Busca pelo elemento e se tiver, fala digita o valor da chave que ele se encontra</h3>
            <hr>

            <?php

            print_r(in_array('Zeca', $array['Pessoa 1']));
            ?>


        </div>

        <div>
            <h3>Array_search - Mostra a posição do elemento buscado</h3>
            <hr>
            <?php

            print_r(array_search('Zeca', $array['Pessoa 1']));

            ?>

        </div>

        <div>
            <h3>Isset - Verificar se existe essa posição dentro do array, retornando 1 para sim e nulo para não</h3>
            <hr>
            <?php
            print_r(isset($array['Pessoa 3']));


            ?>
        </div>

        <div>
            <h3>Implode - Escreve o array sem mostrar as chaves, apenas o valores</h3>
            <hr>
            <?php
            echo implode(', <br>', $array['Pessoa 3']);

            ?>


        </div>

        <div>
            <h3>Explode - Quebra a string toda vez que encontrar um determinado parâmetro</h3>
            <hr>
            <?php
            echo "<pre>";
            print_r(explode('a', 'Pessoa 1'));
            echo "</pre>";
            ?>

        </div> 


    </section>


</body>

</html>