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
        include_once('header-alterar.html')
    ?>

    <main>
        <form action="aluno.php" method="get" >

            <section id="alt-nome">

            <label for="inome">Nome:</label>

                <input type="text" name="nome" value="<?php echo $_GET['nome']?>" id="iname">
            </section>

            <section id="alt-nomesocial">

                <label for="inomes">Nome Social:</label>

                <input type="text" name="nomes" value="<?php echo $_GET['nomes']?>" id="inomes">

            </section>

            <section id="alt-senha">
                <label for="isenha">Senha:</label>
                <input type="text" name="senha" value="<?php echo $_GET['senha']?>" id="isenha">
            </section>
            <section id="alt-cpf">
                <label for="icpf">CPF:</label>
                <input type="text" name="cpf" value="<?php echo $_GET['cpf']?>" id="icpf">
            </section>
            <section id="alt-ende">
                <label for="iende">Endereço:</label>
                <input type="text" name="ende" value="<?php echo $_GET['ende']?>" id="iende">
            </section>
            <section id="alt-matricula">
                <label for="imatri">Matricula:</label>
                <input type="text" name="matri" value="<?php echo $_GET['matri']?>" id="imatri">
            </section>
            <section id="alt-turma">
                <label for="iturma">Turma:</label>
                <input type="text" name="turma" value="<?php echo $_GET['turma']?>" id="iturma">
            </section>
            <section id="alt-estado">
            <label for="esta">Estado:</label>
                <select name="estado" id="esta" required>
                    <option value="<?php echo strtoupper($_GET['estado'])?>"> <?php echo strtoupper($_GET['estado'])?></option>
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
                <input type="submit" value="Alterar">
            </section>

        </form>



    </main>


    <?php
        include_once('footer.html')
    ?>

</body>
</html>