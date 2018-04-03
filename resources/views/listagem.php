<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controle de Estoque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <h1>Listagem de Produtos</h1>

    <table>
        <tr>
            <td>Nome</td>
            <td>Valor</td>
            <td>Descrição</td>
            <td>Quantidade</td>
        </tr>
        
        <?php foreach($produtos as $produto): ?>
        <tr>
            <td> <?= $produto -> nome ?> </td>
            <td> <?= $produto -> valor ?> </td>
            <td> <?= $produto -> descricao ?> </td>
            <td> <?= $produto -> quantidade ?> </td>
        </tr>
        <?php endforeach ?>
    </table>

</body>
</html>