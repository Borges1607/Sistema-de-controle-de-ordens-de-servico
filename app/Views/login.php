<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-color: #C3B091;">
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;" style="background-color: #8E806A;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">PedrinhoConcertos</h2>

                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="typeEmailX">Email</label>
                  <input type="email" id="typeEmailX" placeholder="Informe seu Email" class="form-control form-control-lg"  style="background-color: #C3B091;" />    
                </div>

                <div class="form-outline form-white mb-4">
                  <label class="form-label"  for="typePasswordX">Senha</label>
                  <input type="password" id="typePasswordX" placeholder="Crie uma senha" class="form-control form-control-lg" style="background-color: #C3B091;" />
                </div>

                <a href="/home">
                <button class="btn btn-outline-light btn-lg px-5"  type="submit" style="margin-bottom: 60px;">Logar</button>
                </a>

                <div >
                  <p class="mb-0">Não tem Cadastro? <a href="/cadastro" class="text-white-50 fw-bold">Cadastre-se</a></p></p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
