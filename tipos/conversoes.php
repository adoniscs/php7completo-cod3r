<div class="titulo">Conversões</div>

<?php
  echo is_int(PHP_INT_MAX);

  // int para float
  echo '<p>int para float</p>';
  var_dump(PHP_INT_MAX + 1);
  echo '<br/>';
  var_dump(1 + 1.0);
  echo '<br/>';
  var_dump((float)3);

  // floar para int
  echo '<p>float para int</p>';
  var_dump((int)6.8);
  echo '<br/>';
  var_dump(intval(2.8));
  echo '<br/>';
  var_dump((int)round(2.8));

  // operações com string
  echo '<p>String</p>';
  var_dump(3 + "2");
  echo '<br/>';
  var_dump("3" + 2);
  echo '<br/>';
  var_dump("3" . 2);
  echo '<br/>', is_string("3" . 2);
  // echo '<br/>', is_string("3" + 2);
  // var_dump(1 + "cinco");
  echo '<br/>';
  var_dump(1 + "5 cinco");
  echo '<br/>';
  var_dump((float)"10.5");
  