<?php require_once "./../php/SeculoAno.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="shortcut icon" href="assets/images/account-history-line-art-vector-260nw-273860531.webp" type="image/x-icon">
    <title>Função SeculoAno</title>
</head>
<body>
    <div class="space-w-h">
        <div class="container color p-5 text-light">
            <header class="d-flex justify-content-center align-items-center flex-column" >
                <h3 class="mb-3">App "SeculoAno"</h3>
                <p>Informe o ano e saberá o século</p>
            </header>
            <form method="get">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Ano</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="ano" >
                    </div>
                </div>
                
                
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        O século é: <?=$result?>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Verificar</button>
            </form>
        </div>
    </div>
</body>
</html>