<?php

  require 'Gerente.php';
  require 'Secretaria.php';
  require 'Telefonista.php';

  $g = new Gerente();
  $s = new Secretaria();
  $t = new Telefonista();

  $g->nome = 'Rafael Cosentino';
  $g->salario = 2000;
	$g->usuario = 'rafael.cosentino';
	$g->senha = '12345';

  var_dump($g);

  echo 'Bonificação sera de : ' . $g->calculaBonificacao() . PHP_EOL;

  $s->nome = 'Tatiane Andrade';
  $s->salario = 1500;
  $s->ramal = 198;

  var_dump($s);

  echo 'Bonificação sera de : ' . $s->calculaBonificacao() . PHP_EOL;

  $t->nome = 'Carolina Mello';
  $t->salario = 1000;
  $t->estacaoDeTrabalho = 13;

  var_dump($t);

  echo 'Bonificação sera de : ' . $t->calculaBonificacao() . PHP_EOL;

?>
