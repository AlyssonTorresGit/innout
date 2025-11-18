<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>In 'N Out</title>
</head>

<body>
    <!-- <form class="form-login" accept="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling"></i>
                <span class="font-weight-light">In</span>
                <span class="font-weight-bold">'N</span>
                <span class="font-weight-light">Out</span>
                <i class="icofont-runner-alt-1"></i>
            </div>
            <did class="card-body">
                
            </did>
        </div>
    </form> -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <form class="form-login" action="#" method="post">
                <div class="card-header">
                    <i class="icofont-travelling"></i>
                    <span class="font-weight-light">In</span>
                    <span class="font-weight-bold">'N</span>
                    <span class="font-weight-light">Out</span>
                    <i class="icofont-runner-alt-1"></i>
                </div>

                <div class="form-group">
                    <label for="emailInput">Endereço de Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu e-mail" autofocus>
                    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="passwordInput">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="checkMe">
                    <label class="form-check-label" for="checkMe">Lembrar de mim</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </form>
        </div>
    </div>

</body>

</html>