<?php

$contaCorrentes = [1234567890 => ['titular' => 'Vinicius', 'saldo'=> 1000],
				   1223456789 => ['titular' => 'Maria', 'saldo' => 10000],
				   1123456789 => ['titular' => 'Alberto', 'saldo' => 300]];

foreach ($contaCorrentes as $cpf => $conta) {
	echo $cpf." ".$conta['titular'].PHP_EOL;
}
