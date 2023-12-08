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
            <th scope="col">CNH</th>
            <th scope="col">Placa</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pedro</td>
                <td>pedro@gmail.com</td>
                <td>(51)99443322</td>
                <td>1234567</td>
                <td>bra2e19</td>
                <td>Ford</td>
                <td>F-150</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Julio</td>
                <td>Julio@gmail.com</td>
                <td>(51)99441122</td>
                <td>1238567</td>
                <td>ora7e19</td>
                <td>Fusca</td>
                <td>Ford Model T</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Ana</td>
                <td>ana@gmail.com</td>
                <td>(51)88443322</td>
                <td>5234564</td>
                <td>bta2u79</td>
                <td>Fiat</td>
                <td>UNO</td>
            </tr>
        </tbody>
    </table>
</body>
</html>