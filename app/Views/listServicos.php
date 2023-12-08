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
            <th scope="col">Proprietário</th>
            <th scope="col">Placa</th>
            <th scope="col">Equipe</th>
            <th scope="col">Peça</th>
            <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pedro</td>
                <td>bra2e19</td>
                <td>Limpeza</td>
                <td>-</td>
                <td>100,00</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Julio</td>
                <td>ora7e19</td>
                <td>Pintura</td>
                <td>-</td>
                <td>250,00</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Ana</td>
                <td>bta2u79</td>
                <td>Elétrica</td>
                <td>Farol</td>
                <td>300,00</td>
            </tr>
        </tbody>
    </table>
</body>