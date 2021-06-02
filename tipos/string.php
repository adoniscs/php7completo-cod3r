<div class="titulo">Tipo string</div>

<?php
  echo 'Eu sou uma string', '<br/>';
  var_dump("Eu também");
  echo '<br/>';

  // concatenação
  echo "Nós também " . 1234;
  echo '<br/>', "Também aceito", ' virgula', '<br/>';
  echo "'Teste' " . "| " . '"Teste"';
  print("<br/> Também existe a função print");
  print "<br/> Também existe a função print";

  // Algumas funções
  echo '<br/>' . strtoupper('maximizando');
  echo '<br/>' . strtolower('MINIMIZADO');
  echo '<br/>' . ucfirst('só a primeira letra');
  echo '<br/>' . strlen('Quantas letras?');
  echo '<br/>' . mb_strlen("Eu também", "utf-8");
  echo '<br/>' . substr("Só uma parte mesmo", 7, 6);
  echo '<br/>' . str_replace('isso', 'aquilo', 'Troca isso');