<div class="titulo">Desafio - Precedencia</div>

<?php
    echo '<p>1. Qual o valor será o resultado?</p>';
    echo ' a) ', "2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3)"; // erro , divisão por zero

    echo '<p>2. Qual expressão imprime o valor 100?</p>';
    echo ' a) ', (1 + 2) * 20 - 15, '<br />'; // 45
    echo ' b) ', 4 * 5 ** 2, '<br />'; // 100
    echo ' c) ', 2 ** 3 ** 4 / 1e25, '<br />'; // 0
    echo ' d) ', 3 + (3 * 8) / 2 - 3, '<br />'; // 12