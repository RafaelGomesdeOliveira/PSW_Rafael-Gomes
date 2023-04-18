<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleeee.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <div class="englo">
        <div class='box'>
            <div class='wave -one'></div>
            <div class='wave -two'></div>
            <div class='wave -three'></div>
        </div>
    </div>
    <div id="box-1">
        <h1 id="h1-box">Cadastre-se</h1>
        <form class="row g-3 was-validated" method="post" action="mostrar.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Digite o e-mail" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor, preencha este campo.</div>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Digite a senha" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor, preencha este campo.</div>
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">1° Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Nome e n° da rua" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor, preencha este campo.</div>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">2° Endereço</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, estudio ou casa"
                    required>
                <div class="valid-feedback">Campo optativo.</div>

            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor, preencha este campo.</div>
            </div>
            <div class="col-md-2">
                <label for="inputState" class="form-label">Estado</label>
                <select id="inputState" class="form-select" required>
                    <option value=""> </option>
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
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor, preencha este campo.</div>
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputZip" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor, preencha este campo.</div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Concordo com os termos de uso
                    </label>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Concorde com os termos de uso</div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>