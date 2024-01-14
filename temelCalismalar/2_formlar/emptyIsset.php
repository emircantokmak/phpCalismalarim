<?php
  $sayi=0;
  //$sayi değişkenin boş olup olmadığını kontrol etme
  if(empty($sayi)){
    echo "değişken ya 0 ya da tanımsız<br>";
  }
  if(isset($sayi)){
    echo "değişken boş olsa da tanımlıdır.";
  }
