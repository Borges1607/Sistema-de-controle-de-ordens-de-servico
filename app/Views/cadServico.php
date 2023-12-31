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
                                <h3 class="fw-bold mb-2 text-uppercase">Cadastro de Serviço</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="fw-bold mb-2 text-uppercase">Informações do Veiculo</h4>
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="nome">Proprietário</label>
                                            <input type="text" id="nome" placeholder="Informe o nome do cliente"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="Veiculo">Veiculo</label>
                                            <input type="text" id="Veiculo"
                                                placeholder="Informe a placa do veiculo"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="fw-bold mb-2 text-uppercase">Informar Serviço</h4>
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="Equipe">Equipe</label>
                                            <input type="text" id="Equipe"
                                                placeholder="Informe a Equipe responsavel"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>
                                        
                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="peca">Peça</label>
                                            <input type="text" id="peca"
                                                placeholder="Se nescessario a troca, Informe a peça"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="Valor">Valor</label>
                                            <input type="text" id="Valor"
                                                placeholder="Informe o Valor do seviço"
                                                class="form-control form-control-lg"
                                                style="background-color: #C3B091;" />
                                        </div>
                                    </div>
                                </div>
                                <a href="/listServicos">
                                    <button class="btn btn-outline-light btn-lg px-5"  type="submit">Cadastrar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>