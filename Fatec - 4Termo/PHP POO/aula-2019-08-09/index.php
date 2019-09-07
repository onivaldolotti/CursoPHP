<?php

// $a = 5;
//
// echo $a.PHP_EOL.'hello world';
//
// $nome = "Ana";
// $idade = 12;
// $email = "ana@gmail.com";
// echo "Nome: $nome".PHP_EOL."Idade: $idade PHP_EOL E-mail: $email";

// $a = 5346;
// $b = 78723;
// $c = 23249;
// $media = ($a+$b+$c)/3;
// echo number_format($media,2,",",".");
//com printf
//printf("%.2f", $media);

// $a = 5;
// $b = 10;
// echo  nl2br("Valores antes da troca: Valor de A:$a Valor de B:$b\n\n");
// 	$x =$a;
// 	$a = $b;
// 	$b = $x;
// echo "Valores depois da troca: Valor de A:$a Valor de B:$b<b>";

//----------------------------------------Exe 1 -------------------------------
echo "Exercicio 1:";
echo "<br>";
$a = 658;

if ((int)($a/100)<(int)($a%100/10) && (int)($a%100/10)<(int)($a%10) ) {
	echo "O numero $a e ascendente";
}else {
	echo "O numero $a nao ascendente";
}
echo "<br>";
echo "<br>";
// ------------------------------------------Exe 2 --------------------------
echo "Exercicio 2:";
echo "<br>";
$a =4;
$b= 2;
$c= 5;
echo "$a$b$c<br />";
if($a>$b) {
	$x= $a;
	$a=$b;
	$b=$x;
}
if($b>$c) {
	$x =$b;
	$b =$c;
	$c =$x;
}
if($a>$b) {
	$x= $a;
	$a=$b;
	$b=$x;
}
echo "$a$b$c<br />";
echo "<br>";
//--------------------------------------exe 3-------------------
echo "Exercicio 3:";
echo "<br>";
for ($i=0; $i <=100; $i++) {
	echo $i.",";
}
echo "<br>";
echo "<br>";
//=-------------------------------------exe 4-------------
echo "Exercicio 4:";
echo "<br>";
for ($i=0; $i < 100; $i++) {
	if($i%2==0) {
		echo $i.",";
	}
}
echo "<br>";
echo "<br>";
//----------------------------------exe 5 ------------------
echo "Exercicio 5:";
echo "<br>";
$numero = 5;

for ($i=1; $i <=10 ; $i++) {
	echo "$numero x $i = ".$numero*$i."<br />";
}
echo "<br>";
echo "<br>";
//----------------------------------exe 6 -------------------
echo "Exercicio 6:";
echo "<br>";
for ($i=1000; $i>0 ; $i-=3) {
	echo $i." ";
}
echo "<br>";
echo "<br>";
// ---------------------------- exe 7 --------------------
echo "Exercicio 7:";
echo "<br>";
for ($i=100; $i < 1000; $i++) {

	$c = (int)($i/100);
	$c= pow($c,3);

	$d = (int)(($i%100)/10);
	$d=pow($d, 3);

	$u = (int)(($i%10));
	$u= pow($u, 3);

	if($c+$d+$u == $i) {
		echo $i." ";
	}
}
