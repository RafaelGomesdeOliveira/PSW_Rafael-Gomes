<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Rafael Gomes de Oliveira</title>
    <link rel="stylesheet" href="styeee.css">
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
        <h2>Atividade 1</h2>
        <div>
            <?php

            $ifBaiano = array(
                "Informática" => [
                    "Rafael Gomes de Oliveira" => [
                        "BD" => [
                            "Nota 1:" => 10,
                            "Nota 2:" => 10
                        ],
                        "PSW" => [
                            "Nota 1:" => 10,
                            "Nota 2:" => 10
                        ]

                    ],
                    "Sávio Pessôa Afonso" => [
                        "Matemática" => [
                            "Nota 1:" => 5,
                            "Nota 2:" => 5
                        ],
                        "Biologia" => [
                            "Nota 1:" => 5,
                            "Nota 2:" => 5
                        ]

                    ],
                    "Tiago" => [
                        "ASW" => [
                            "Nota 1:" => 3,
                            "Nota 2:" => 3
                        ],
                        "Produção textual" => [
                            "Nota 1:" => 3,
                            "Nota 2:" => 3
                        ]

                    ],
                    "Maria" => [
                        "Português" => [
                            "Nota 1:" => 6,
                            "Nota 2:" => 6
                        ],
                        "Geografia" => [
                            "Nota 1:" => 6,
                            "Nota 2:" => 6
                        ]

                    ]

                ],
                "Agropecuaria" => [
                    "Renan" => [
                        "Topografia" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ],
                        "Matemática" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ]
                    ],
                    "Felipe" => [
                        "Português" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ],
                        "Geografia" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ]
                    ],
                    "Micael" => [
                        "ASW" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ],
                        "Produção textual" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ]

                    ],
                    "João" => [
                        "Física" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 2
                        ],
                        "Sociologia" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 1
                        ]

                    ]

                ]
            );

            echo "<h3>Utilizando print_r();</h3>";
            echo "<hr>";
            echo "<pre>";

            print_r($ifBaiano);
            echo "</pre>";

            echo "<h3>Utilizando o foreache</h3>";
            echo "<hr>";

            foreach ($ifBaiano as $cursos => $alunos) {
                echo "$cursos<br>";
                foreach ($alunos as $aluno => $disciplinas) {
                    echo "<br>$aluno<br>";
                    foreach ($disciplinas as $disciplina => $notas) {
                        echo "$disciplina<br>";
                        foreach ($notas as $nota => $fim) {
                            echo "$nota $fim<br>";
                        }
                        echo "<br>";
                    }

                }

            }
            ;
            ?>
        </div>

        <div>
            <?php
            echo "<h3>Chamando somente um aluno</h3>";
            echo "<hr>";
            echo "<pre>";
            print_r($ifBaiano['Informática']['Rafael Gomes de Oliveira']);
            echo "</pre>";

            ?>

        </div>

        <div>
            <?php
            echo "<h3>Somando as notas de Rafael em Banco de Dados</h3>";
            echo "<hr>";

            print_r($ifBaiano['Informática']['Rafael Gomes de Oliveira']['BD']['Nota 1:'] + $ifBaiano['Informática']['Rafael Gomes de Oliveira']['BD']['Nota 2:']);
            ?>

        </div>
        <div>
            <h3>Imprimindo utilizando o foreach uma média simples de apenas um aluno, porém em varias disciplinas, a sua
                nota final, e por fim, relatando se o mesmo passou na disciplina</h3>
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
                    'Prova 1' => 50,
                    'Prova 2' => 50
                ),
                'Projeto Integrador' => array(
                    'Prova 1' => 45,
                    'Prova 2' => 35

                )
            );

            $i = 0;
            $media = 0;
            $valorObtido = 0;
            //Imprimindo o array degeral
            foreach ($aluno as $materia => $notas) {
                echo "$materia" . "<br>";
                foreach ($notas as $copiaNota => $valores) {
                    echo "$copiaNota: $valores" . "<br>";
                    $i += 1;
                    $media += $valores;
                    $valorObtido += $valores;
                }

                $media = $media / $i;
                $media = number_format($media, 2, '.', "");
                echo "Media:$media" . "<br>";

                echo "Nota final:$valorObtido" . "<br>" . "<br>";

                if ($valorObtido >= 60) {
                    echo "Parabéns, você conseguiu passar nessa disciplina!!!" . "<br>" . "<br>";
                } else {
                    echo "Infelizmente você não obteve a nota necessária para passar nessa disciplina" . "<br>";
                }


                //Zerando valores
                $i = 0;
                $media = 0;
                $valorObtido = 0;

            }



            ?>

        </div>

        <div>
            <h3>Imprimindo a média de apenas um disciplina, utilizando o foreach</h3>
            <hr>
            <?php
            foreach ($aluno as $materia => $notas) {
                if ($materia == 'Redes de Computadores') {
                    echo "$materia" . "<br>";

                    foreach ($notas as $copiaNota => $valores) {
                        echo "$copiaNota: $valores" . "<br>";
                    }

                }

            }
            ?>

        </div>

        <div>
            <h3>Imprimindo apenas uma disciplina, utilizando o print_r</h3>
            <hr>
            <?php
            echo "<pre>";
            print_r($aluno['Redes de Computadores']);
            echo "</pre>";
            ?>

        </div>

        <div>
            <h3>Realizando a Soma e a Média dos alunos (sem utilizar o nome do item que se encontro a nota, e imprimindo
                somente as notas maiores que 5)</h3>
            <hr>
            <?php
            $ifBaiano = array(
                "Informática" => [
                    "Rafael Gomes de Oliveira" => [
                        "BD" => [
                            "Nota 1:" => 10,
                            "Nota 2:" => 10
                        ],
                        "PSW" => [
                            "Nota 1:" => 10,
                            "Nota 2:" => 10
                        ]

                    ],
                    "Sávio Pessôa Afonso" => [
                        "Matemática" => [
                            "Nota 1:" => 5,
                            "Nota 2:" => 5
                        ],
                        "Biologia" => [
                            "Nota 1:" => 5,
                            "Nota 2:" => 5
                        ]

                    ],
                    "Tiago" => [
                        "ASW" => [
                            "Nota 1:" => 3,
                            "Nota 2:" => 3
                        ],
                        "Produção textual" => [
                            "Nota 1:" => 3,
                            "Nota 2:" => 3
                        ]

                    ],
                    "Maria" => [
                        "Português" => [
                            "Nota 1:" => 6,
                            "Nota 2:" => 6
                        ],
                        "Geografia" => [
                            "Nota 1:" => 6,
                            "Nota 2:" => 6
                        ]

                    ]

                ],
                "Agropecuaria" => [
                    "Renan" => [
                        "Topografia" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ],
                        "Matemática" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ]
                    ],
                    "Felipe" => [
                        "Português" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ],
                        "Geografia" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ]
                    ],
                    "Micael" => [
                        "ASW" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ],
                        "Produção textual" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ]

                    ],
                    "João" => [
                        "Física" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 2
                        ],
                        "Sociologia" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 1
                        ]

                    ]

                ],
                "Agroindustria" => [
                    "Tiago" => [
                        "Topografia" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ],
                        "Matemática" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ]
                    ],
                    "Pedro" => [
                        "Português" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 8
                        ],
                        "Geografia" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ]
                    ],
                    "Zé" => [
                        "ASW" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ],
                        "Produção textual" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ]

                    ],
                    "Abnes" => [
                        "Física" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 2
                        ],
                        "Sociologia" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 1
                        ]

                    ]

                ]
            );

            $valorDivisao = 0;

            $impresso = false;
            $impressao = false;
            $media = 0;

            $tiraDis = 0;


            foreach ($ifBaiano as $cursos => $alunos) {
                echo "<strong><br>$cursos</strong>";
                foreach ($alunos as $aluno => $disciplinas) {
                    foreach ($disciplinas as $disciplina => $notas) {
                        foreach ($notas as $nota => $fim) {
                            if ($fim > 5) {
                                $media += $fim;
                                if (!$impresso) {
                                    echo "<br><br>$aluno<br>";
                                    $impresso = true;

                                }
                                if (!$impressao) {
                                    echo "$disciplina<br>";
                                    $impressao = true;
                                }
                                echo "$nota $fim<br>";
                                $valorDivisao += 1;
                            }
                        }

                        if ($media != 0) {
                            echo "Média:" . ($media / 2) . "<br>";
                        }
                        $media = 0;

                        $impressao = false;
                    }
                    $tiraDis = 0;
                    $impresso = false;

                }


            }
            ;

            ?>

        </div>

        <h2>Atividade 2</h2>
        <div>
            <h3>Array - Explícito</h3>
            <hr>
            <?php
            $pais = array(
                'Brasil',
                'França',
                'Estados Unidos da America',
                'Russia'
            );
            echo "<pre>";
            print_r($pais);
            echo "</pre>";
            ?>
        </div>

        <div>
            <h3>Adicionando novos itens no Array</h3>
            <hr>
            <?php
            $pais[] = 'Portugal';
            echo "<pre>";
            print_r($pais);
            echo "</pre>";

            ?>

        </div>

        <div>
            <h3>Alterando valores do Array</h3>
            <hr>
            <?php

            $pais[3] = 'Alemanha';

            echo "<pre>";
            print_r($pais);
            echo "</pre>";


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


        <h2>Atividade 3</h2>
        <div>
            <h3>Imprimindo o array em ordem decrescente com base na idade dos usuarios cadastrados no array</h3>
            <hr>
            <?php
            $array = [
                [
                    'id' => 1,
                    'nome' => 'Zeca',
                    'idade' => 42
                ],
                [
                    'id' => 2,
                    'nome' => 'Jao',
                    'idade' => 32
                ],
                [
                    'id' => 3,
                    'nome' => 'mareia',
                    'idade' => 50
                ]
            ];
            usort($array, function ($a, $b) {
                if ($a['idade'] == $b['idade'])
                    return 0;

                return ($a['idade'] < $b['idade'] ? 1 : -1);

            });

            echo '<pre>';
            print_r($array);
            echo '</pre>';

            ?>

        </div>

        <div>
            <h3>Imprimindo somente os cursos, utilizando o foreach</h3>
            <hr>
            <?php
            $ifBaiano = array(
                "Informática" => [
                    "Rafael Gomes de Oliveira" => [
                        "BD" => [
                            "Nota 1:" => 10,
                            "Nota 2:" => 10
                        ],
                        "PSW" => [
                            "Nota 1:" => 10,
                            "Nota 2:" => 10
                        ]

                    ],
                    "Sávio Pessôa Afonso" => [
                        "Matemática" => [
                            "Nota 1:" => 5,
                            "Nota 2:" => 5
                        ],
                        "Biologia" => [
                            "Nota 1:" => 5,
                            "Nota 2:" => 5
                        ]

                    ],
                    "Tiago" => [
                        "ASW" => [
                            "Nota 1:" => 3,
                            "Nota 2:" => 3
                        ],
                        "Produção textual" => [
                            "Nota 1:" => 3,
                            "Nota 2:" => 3
                        ]

                    ],
                    "Maria" => [
                        "Português" => [
                            "Nota 1:" => 6,
                            "Nota 2:" => 6
                        ],
                        "Geografia" => [
                            "Nota 1:" => 6,
                            "Nota 2:" => 6
                        ]

                    ]

                ],
                "Agropecuaria" => [
                    "Renan" => [
                        "Topografia" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ],
                        "Matemática" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ]
                    ],
                    "Felipe" => [
                        "Português" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ],
                        "Geografia" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ]
                    ],
                    "Micael" => [
                        "ASW" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ],
                        "Produção textual" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ]

                    ],
                    "João" => [
                        "Física" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 2
                        ],
                        "Sociologia" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 1
                        ]

                    ]

                ],
                "Agroindustria" => [
                    "Tiago" => [
                        "Topografia" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ],
                        "Matemática" => [
                            "Nota 1:" => 7,
                            "Nota 2:" => 7

                        ]
                    ],
                    "Pedro" => [
                        "Português" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ],
                        "Geografia" => [
                            "Nota 1:" => 8,
                            "Nota 2:" => 8
                        ]
                    ],
                    "Zé" => [
                        "ASW" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ],
                        "Produção textual" => [
                            "Nota 1:" => 4,
                            "Nota 2:" => 4
                        ]

                    ],
                    "Abnes" => [
                        "Física" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 2
                        ],
                        "Sociologia" => [
                            "Nota 1:" => 2,
                            "Nota 2:" => 1
                        ]

                    ]

                ]
            );
            foreach ($ifBaiano as $cursos => $alunos) {
                echo "$cursos<br><br>";

            }
            ;

            ?>

        </div>

        <div>
            <h3>Imprimindo somente os alunos, utilizando o foreach</h3>
            <hr>
            <?php
            foreach ($ifBaiano as $cursos => $alunos) {
                foreach ($alunos as $aluno => $disciplinas) {
                    echo "$aluno<br>";

                }

            }
            ;

            ?>

        </div>

        <div>
            <h3>Imprimindo os alunos em seus respectivos cursos, utilizando o foreach</h3>
            <hr>
            <?php
            foreach ($ifBaiano as $cursos => $alunos) {
                echo "$cursos:<br><br>";
                foreach ($alunos as $aluno => $disciplinas) {
                    echo "$aluno<br>";

                }
                echo "<br>";
            }
            ;
            ?>

        </div>

    </section>

</body>

</html>