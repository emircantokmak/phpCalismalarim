<?php
//Değişkenin  tanımlı olup olmadığını kontrol etme
  $sayi=5;
  if(isset($sayi)){
    echo "Değişken tanımlı<br>";
  }
  else{
    echo "Değişken tanımsız";
  }
//birden fazla formdan veri yakalama
if(isset($_POST['kullanici_girisi'])){
  echo "Kullanıcı Giriş Formu İşlemleri";
}
if(isset($_POST['admin_girisi'])){
  echo "Admin Giriş Formu İşlemleri";
}
