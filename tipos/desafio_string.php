<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, qual o
// método que a posição do texto 'abc' na string '!AbcaBcabc'
// retorne 1?

$str1 = '!AbcaBcabc';
$str2 = 'abc';

echo strpos(strtolower($str1), $str2) . '<br/>'; // minha solução

echo stripos('!AbcaBcabc', 'abc'); // solução do instrutor