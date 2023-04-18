<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Home Page</title>
</head>
<body>
    <?php
    include_once('header-login.php')
    ?>

    <main id="login">

        <form id="form-login" action="login.php" method="get">
            <section id="sec-nome">
                <label for="inome">Nome:</label>
                <input type="text" name="nome" id="inome">
            </section>

            <section id="sec-senha">
                <label for="isenha">Senha:</label>
                <input type="text" name="senha" id="isenha">
            </section>



        </form>
    </main>
    <?php
    include_once('footer.html')
    ?>

    


</body>
</html>