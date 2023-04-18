<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
    <style> 
        * {
            margin: 0px;
            padding:  0px;
            font-family: Arial, Helvetica, sans-serif;
            overflow-y: hidden;
        }
        
        main{
            height: 71vh;
            display: flex;
            flex-direction: row;
            margin: 20px 0px;
            flex-wrap: wrap;
            justify-content: space-around;
        }   
        section {
            width: 39vw;
            padding: 15px 0px;
        }

        .button {
            display: block;
            width: 100vw;
            margin: auto;
            text-align: center;
        }

        .button  button {
            border-radius: 5px;
            width: 150px;
            height: 30px;
        }


    </style>

    
</head>
<body>
    <?php
        include_once('header-mostrar.html');
    ?>

    <main>

        <section id="sec-nome">
            <h2>Nome:</h2>
            <?php 
                echo $_GET['nome']
            ?>

        </section>    

        <section id="sec-nome-social">
            <h2>Nome social:</h2>
            <?php
            echo $_GET['nomes']
            ?>

        </section>

        <section id="sec-senha">
            <h2>Senha:</h2>
            <?php
            echo $_GET['senha']
            ?>

        </section> 
        
        <section id="sec-cpf">
            <h2>CPF:</h2>
            <?php
            echo $_GET['cpf']
            ?>

        </section> 
        
        <section id="sec-endereco">
            <h2>Endereço:</h2>
            <?php
            echo $_GET['ende']
            ?>

        </section> 

        <section id="sec-matricula">
            <h2>Matrícula:</h2>
            <?php
            echo $_GET['matri']
            ?>

        </section> 
        <section id="sec-turma">
            <h2>Turma:</h2>
            <?php
            echo strtoupper($_GET['turma'])
            ?>

        </section> 

        <section id="sec-estado">
            <h2>Estado:</h2>
            <?php
            echo strtoupper($_GET['estado'])
            ?>

        </section> 
<!-- 
        <div id="mostrarnome">
            <label for="inome2"></label>
            <input type="text" value="<?php echo $_GET['nome'] ?>" name="nome2" id="inome2">


        </div> -->

        <div class="button">
        <form action="alterar.php" method="get">
            <input type="submit" value="Alterar">

            <input type="hidden" name="nome" value=<?php echo $_GET['nome']?>>

            
            <input type="hidden" name="nomes" value=<?php echo $_GET['nomes']?>>

                        
            <input type="hidden" name="senha" value=<?php echo $_GET['senha']?>>

     
            <input type="hidden" name="cpf" value=<?php echo $_GET['cpf']?>>

                        
            <input type="hidden" name="ende" value=<?php echo $_GET['ende']?>>

                        
            <input type="hidden" name="matri" value=<?php echo $_GET['matri']?>>

                        
            <input type="hidden" name="turma" value=<?php echo $_GET['turma']?>>

                        
            <input type="hidden" name="estado" value=<?php echo $_GET['estado']?>>

            </form>





        </div>


    </main>





    <?php
        include_once('footer.html')
    ?>


    
</body>
</html>