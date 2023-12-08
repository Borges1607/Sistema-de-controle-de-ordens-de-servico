<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:#C3B091;">
    <?php include(APPPATH . 'Views/templates/header.php'); ?>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-12 col-lg-10 col-xl-8">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h3 class="fw-bold mb-2 text-uppercase">Cadastro de Veículo</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="fw-bold mb-2 text-uppercase">Informar Proprietário</h4>
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="nome">Nome</label>
                                            <input type="text" id="nome" placeholder="Informe o nome do cliente"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="typeEmailX">Email</label>
                                            <input type="email" id="typeEmailX"
                                                placeholder="Informe o Email do cliente"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="telefone">Telefone</label>
                                            <input type="text" id="Telefone"
                                                placeholder="Informe o telefone do cliente"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="cnh">CNH</label>
                                            <input type="text" id="cnh"
                                                placeholder="Informe a CNH do cliente"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="fw-bold mb-2 text-uppercase">Informar Veículo</h4>
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="Placa">Placa</label>
                                            <input type="text" id="Placa"
                                                placeholder="Informe a placa do veiculo"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>
                                        
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="Marca">Marca</label>
                                            <input type="text" id="Marca"
                                                placeholder="Informe a marca do veiculo"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="Modelo">Modelo</label>
                                            <input type="text" id="Modelo"
                                                placeholder="Informe o modelo do veiculo"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5 mt-3" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>