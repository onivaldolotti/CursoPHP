<?php

require_once 'funcoes.php';

$contaCorrentes = [1234567890 => ['titular' => 'Vinicius', 'saldo'=> 1000],
				   1223456789 => ['titular' => 'Maria', 'saldo' => 10000],
				   1123456789 => ['titular' => 'Alberto', 'saldo' => 300]];

$contaCorrentes ['1223456789'] = depositar($contaCorrentes ['1223456789'],500);

titularComLetrasMaiusculas($contaCorrentes['1123456789']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contaCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>
