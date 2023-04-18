<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    include_once('header.html')
    ?>
    <main>
        <form action="aluno.php" method="get" autocomplete="on">
            <section id="sec-nome">
                <label for="inome">Nome:</label>
                <input type="text" name="nome" id="inome" required>
            </section>

            <section id="sec-nome-social">
                <label for="inomes">Nome Social:</label>
                <input type="text" name="nomes" id="inomes" required>
            </section>


            <section id="sec-senha">
                <label for="isenha">Senha:</label>
                <input type="text" name="senha" id="isenha" required>
            </section>


            <section id="sec-cpf">
                <label for="icpf">CPF:</label>
                <input type="text" name="cpf" id="icpf" required>
            </section>

            <section id="sec-endereco">
                <label for="iende">Endereço:</label>
                <input type="text" name="ende" id="iende" required>
            </section>

            <section id="sec-matricula">
                <label for="imatri">Matrícula:</label>
                <input type="text" name="matri" id="imatri" required>
            </section>

            <section id="sec-turma">
                <label for="iturma">Turma:</label>
                <input type="text" name="turma" id="iturma" required>
            </section>


            <section id="sec-estado">
                <label for="esta">Estado:</label>
                <select name="estado" id="esta" required>
                    <option value=" "> </option>
                    <option value="ac">AC</option>
                    <option value="al">AL</option>
                    <option value="ap">AP</option>
                    <option value="am">AM</option>
                    <option value="ba">BA</option>
                    <option value="ce">CE</option>
                    <option value="df">DF</option>
                    <option value="es">ES</option>
                    <option value="go">GO</option>
                    <option value="ma">MA</option>
                    <option value="mt">MT</option>
                    <option value="ms">MS</option>
                    <option value="mg">MG</option>
                    <option value="pa">PA</option>
                    <option value="pb">PB</option>
                    <option value="pr">PR</option>
                    <option value="pe">PE</option>
                    <option value="pi">PI</option>
                    <option value="rj">RJ</option>
                    <option value="rn">RN</option>
                    <option value="rs">RS</option>
                    <option value="ro">RO</option>
                    <option value="rr">RR</option>
                    <option value="sc">SC</option>
                    <option value="sp">SP</option>
                    <option value="se">SE</option>
                    <option value="to">TO</option>
                </select>
            </section>



            <section id="enviar">
                <input type="submit" id="ienviar" value="Cadastrar">

            </section>



        </form>


    



    </main>



    <?php
    include_once('footer.html')
    ?>

  
</body>

</html>