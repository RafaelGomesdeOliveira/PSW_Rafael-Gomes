<!-- _____________________________________________
    |                                           |
    |       PRIMEIRA ATIVIDADE DE ARRAYS        |
    |___________________________________________| -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<h1> PRIMEIRA ATIVIDADE DE ARRAYS </h1> 

<body>
    <h1 style=" color:pink;">Arrays-Exercicios</h1>
    
<?php 

$arrayDisciplinas= [
    'disciplinas' =>[
        'PSW' =>[
                    'nota1' => 5,
                    'nota2' => 7
            ],
        'BD' =>[
                    'nota1' => 0.7,
                    'nota2' => 10.0
        ],
        'ASW' =>[
                    'nota1' => 9,
                    'nota2' => 10
        ]
    ]
];

    echo '<pre>', "Impressão de todo o array: <br>"; 
    print_r ($arrayDisciplinas);

    echo '</pre>';

    echo '<pre>';
    echo "Impressão de nota de uma matéria específica: <br>";
    echo "notas BD: <br>";
    print_r($arrayDisciplinas['disciplinas']['BD']['nota1']) ;
    echo "<br>";
    print_r($arrayDisciplinas['disciplinas']['BD']['nota2']) ;
    echo "<br>";
    $media = (($arrayDisciplinas['disciplinas']['BD']['nota1']) + ($arrayDisciplinas['disciplinas']['BD']['nota2']))/2;
    echo "media na disciplina de BD : $media <br>";
    echo '</pre>';

?>

</body>
</html>
<!-- _____________________________________________
    |                                           |
    |  SEGUNDA ATIVIDADE DE ARRAYS - FUNÇÕES    |
    |___________________________________________| -->
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<h1> SEGUNDA ATIVIDADE DE ARRAYS - FUNÇÕES </h1> 

<style>

body{
    margin: 10px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
}
pre{
    background-color:rgb(44, 43, 43) ;
    color: aliceblue;
    
}
h2{
    background-color:white;
    color: pink;

}
h3{
    color:purple;
}

</style>
<body>
    <?php 

    $listaordenada = [
    'gato',
    'cachorro',
    'papagaio'

];    
    $matriz = [
        'nome' => 'Cananda',
        'endereco' => 'Guirapá',
        'idade' => '17 anos',
        'cpf' => null
    ];

    echo '<pre>';
    echo "<hr> <h2>Teste de diversas funções:</h2>  ";
    echo '<pre/>';

    echo "<h3>count:</h3>";
    echo '<pre>';
    print_r (count($listaordenada));
    echo '<pre/>';

    echo '<pre>';
    print_r (count($matriz));
    echo '<pre/>';

    echo "<h3>array_keys:</h3>";
    echo '<pre>';
    print_r (array_keys($listaordenada));
    echo '<pre/>';

    echo '<pre>';
    print_r (array_keys($matriz));
    echo '<pre/>';

    echo "<h3>array_values:</h3>";
    echo '<pre>';
    print_r (array_values($listaordenada));
    echo '<pre/>';

    echo '<pre>';
    print_r (array_values($matriz));
    echo '<pre/>';

    echo "<h3>in_array:</h3>";
    echo '<pre>';
    print_r (in_array('Guirapá', $matriz));
    echo '<pre/>';

    echo '<pre>';
    print_r (in_array('caf', $listaordenada)); /* se existir no array coloca 1, caso contrário nem aparece*/
    echo '<pre/>';

    echo '<pre>';
    var_dump(in_array('Guirapá', $matriz)); /*mostra existe ou não com true e false */
    echo '<pre/>';

    echo '<pre>';
    var_dump(in_array('Guirapá', $listaordenada)); /*mostra existe ou não com true e false */
    echo '<pre/>';

    echo "<h3>array_search:</h3>";
    echo '<pre>';
    print_r (array_search('Guirapá', $matriz)); /*posição do item no array */
    echo '<pre/>';

    echo '<pre>';
    print_r (array_search('papagaio', $listaordenada)); /*posição do item no array */
    echo '<pre/>';

    echo "<h3>isset:</h3>";
    echo '<pre>';
    var_dump (isset($listaordenada ['1'])); /*verificar se tá preenchido */
    echo '<pre/>';

    echo '<pre>';
    var_dump (isset($matriz ['cpf'])); /*verificar se está preenchido */
    echo '<pre/>';

    echo "<h3>array_key_exists:</h3>";
    echo '<pre>';
    var_dump (array_key_exists('cpf', $listaordenada)); /*verificar se existe chave */
    echo '<pre/>';

    echo '<pre>';
    var_dump (array_key_exists(3, $matriz)); /*verificar se existe chave */
    echo '<pre/>';

    echo "<h3>array_key_last:</h3>";
    echo '<pre>';
    echo array_key_last($listaordenada);/*verificar se existe chave */
    echo '<pre/>';

    echo "<h3>implode:</h3>";
    echo '<pre>';
    echo implode(', ', $listaordenada); /*array em string */
    echo '<pre/>';

    echo "<h3>explode:</h3>";
    echo '<pre>';
    print_r (explode(',', 'anica, cananda, jeovana')); /*string em array */
    echo '<pre/>';

    echo "<h3>sort:</h3>";
    sort($matriz);

    echo '<pre>';
    print_r ($matriz);
    echo '<pre/>';


    $dados =[
        [
        'id' => 1,
        'nome' => 'Zeca',
        'idade' => 42
        ],
        [
        'id' => 2,
        'nome' => 'Maria',
        'idade' => 65
        ],
        [
        'id' => 3,
        'nome' => 'Lucas',
        'idade' => 9
        ],
        ]
    ;
    
        echo " <h2> impressão com o for: </h2> ";
        for($a=0; $a<count($dados); $a++) {
        print_r ($dados[$a]);
        }

        echo " <hr> <h2>impressão com foreach:</h2>  ";
        foreach ($dados as $chave => $valor) {
            foreach ($valor as $Nchave => $Nvalor) {
                echo $Nchave;
                echo "<pre>";
                    print_r($Nvalor);
                echo "</pre>";
            }
    }
        
            $array = [
                [
                'id' => 1,
                'nome' => 'Zeca',
                'idade' => 42
                ],
                ['id' => 2,
                'nome' => 'Jao',
                'idade' => 32
                ],
                ['id' => 3,
                'nome' => 'Mareia',
                'idade' => 18
                ],
                ['id'=> 4,
                'nome' =>'Cananda',
                'idade' => 17
                ]
            ];
            echo " <hr>";
            echo "<h2>Uso do uasort: </h2>";
    
        echo '<pre>';
        echo "Antes: <br> <br> ";
            print_r($array);
        echo '</pre>';
    
        uasort($array, function ($a, $b) {
            if ($a['nome'] == $b['nome']) return 0;
    
            return ($a['nome'] < $b['nome'] ? -1 : 1);
    
        });
    
        echo '<pre>';
        echo "Depois: <br> <br> ";
            print_r($array);
        echo '</pre>';
    
    



    ?>

</body>
</html>