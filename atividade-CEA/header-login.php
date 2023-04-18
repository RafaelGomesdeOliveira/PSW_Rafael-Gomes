<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            padding: 0px;
            margin: 0px;
            overflow: hidden;
        }

        h1 {

            color: white;

        }

        header {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            width: 100vw;
            height: 13vh;
            font-variant: small-caps;
            justify-content: center;
            align-items: center;
            background-color: gray;
            font-size: 1.2em;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.431);
        }

        span {
            position: absolute;
            top: 3.4vh;
            left: 1vw;
            height: auto;
            padding-top: 7px;
            padding-bottom: 6px;
            background-color: transparent;

        }
        a {
            color: rgb(61, 61, 61);
            text-decoration: none;
            background-color: white;
            padding: 6px;
            border-radius: 7px;
            font-weight:bold;
        }

        a:hover {
            text-decoration: underline;
            color: white;
            background-color: rgb(66, 66, 66);
            transition-duration: 0.7s;
            border: 1px solid white;
        }

    </style>

</head>

<body>


    <header>
        <h1>Login de Alunos</h1>
        <span><a href="cadastrar.php">Cadastre-se</a></span>
    </header>

</body>

</html>