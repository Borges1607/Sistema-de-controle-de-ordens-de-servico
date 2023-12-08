<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:#C3B091 ;">
    <?php include(APPPATH . 'Views/templates/header.php'); ?>
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;" style="background-color: #8E806A;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">

                <h3 class="fw-bold mb-2 text-uppercase">Cadastro de mecanico</h3>

                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="nome">Nome</label>
                  <input type="text" id="nome" placeholder="Informe o nome" class="form-control form-control-lg"  style="background-color: #C3B091;" />    
                </div>

                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="typeEmailX">Email</label>
                  <input type="email" id="typeEmailX" placeholder="Informe o Email" class="form-control form-control-lg"  style="background-color: #C3B091;" />    
                </div>

                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="telefone">Telefone</label>
                  <input type="text" id="Telefone" placeholder="Informe o telefone" class="form-control form-control-lg"  style="background-color: #C3B091;" />    
                </div>

                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="equipe">Equipe</label>
                  <div class="input-group mb-3 custom-bg">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" style="background-color: #C3B091;">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item">Limpeza</a></li>
                        <li><a class="dropdown-item">Elétrica</a></li>
                        <li><a class="dropdown-item">Mecânica</a></li>
                        <li><a class="dropdown-item">Balanceamento/Geometria</a></li>
                        <li><a class="dropdown-item">Pintura</a></li>
                    </ul>
                  </div> 
                </div>
                <a href="/listMecanicos">
                  <button class="btn btn-outline-light btn-lg px-5"  type="submit">Cadastrar</button>
                </a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<style>
    .custom-bg {
    background-color: #C3B091; 
    }
</style>