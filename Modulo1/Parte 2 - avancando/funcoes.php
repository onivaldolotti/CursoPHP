<?php

function sacar(array $contaCorrentes, float $valor): array
{
	if ($valor>$contaCorrentes['saldo']) {
		exibirMensagem("Valor nao pode sacar");
	}else{
		$contaCorrentes['saldo'] -=$valor;
	}
return $contaCorrentes;
}

function depositar(array $contaCorrentes, float $valor): array
{
	if ($valor < 0) {
		exibirMensagem("Valor precisa ser positivo");
	}else{
		$contaCorrentes['saldo'] += $valor;
	}
return $contaCorrentes;
}

function exibirMensagem(string $mensagem){
	echo $mensagem.'<br>';
}

function titularComLetrasMaiusculas(array &$conta)
{
	$conta['titular'] = strtoupper($conta['titular']);
}
function exibeConta(array $conta)
{
	['titular'=> $titular, 'saldo'=> $saldo]= $conta;
	echo "<li>
	Titular: $titular.Saldo: $saldo
	</li>";
}
