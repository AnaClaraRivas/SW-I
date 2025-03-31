<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estiloindex.css">
    <title>Login</title>
</head>
<body>

    <!-- Centralizando o card -->
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Login</h5>
                <form action="processa.php" method="POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form2Example1" class="form-control" name="email" required />
                        <label class="form-label" for="form2Example1">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" class="form-control" name="senha" required />
                        <label class="form-label" for="form2Example2">Senha</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Deixe registrado </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Esqueceu a senha?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn enviar">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
