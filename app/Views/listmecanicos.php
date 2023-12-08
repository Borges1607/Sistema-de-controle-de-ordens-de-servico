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
    <table class="table table-hover" >
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Equpe de Trabalho</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Carlos</td>
                <td>carlos@gmail.com</td>
                <td>(53) 67884455</td>
                <td>Limpeza</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Eduardo</td>
                <td>eduardo@gmail.com</td>
                <td>(51) 64584453</td>
                <td>Mecanica</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Juliana</td>
                <td>juliana@gmail.com</td>
                <td>(51) 34587423</td>
                <td>Balanceamento/Geometria</td>
            </tr>
        </tbody>
    </table>
</body>
</html>