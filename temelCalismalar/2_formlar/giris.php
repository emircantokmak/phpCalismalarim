<?php
echo "Kullanıcı Adı:".$_POST["kuladi"];
echo "<br>";
echo "Şifre:".$_POST["sifre"];
echo "<br>";
$kullaniciAdi="Emir";
$sifre=123456;
if($_POST["kuladi"]==$kullaniciAdi && $_POST["sifre"]==$sifre){
  echo "<h3>Giriş Başarılı</h3>";
}
else{
  echo "Kullanıcı Adı veya Şifre yanlış.Tekrar deneyiniz...";
}
