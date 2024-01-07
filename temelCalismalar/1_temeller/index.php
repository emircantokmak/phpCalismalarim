<!DOCTYPE html>
<html>
<head>
<title>1- Php Temelleri</title>
<meta charset="utf-8">
</head>
<body>
<center><b><h2>Temel Php Çalışmaları</h2></b></center><br>
<p><b>1-Ekrana Değişken yazdırma</b><br>
<?php
$ad="Emir Can Tokmak";
echo $ad;
?>
</p><br>
<b>2- Tek ve Çift Tırnak Kullanımı</b><br>
<?php
$ad="Emir";
echo "$ad<br>";
echo '$ad';
?><br>
<b>Borsa Kazancım</b><br>
<?php
$bakiye=7000000;
for($dongu=1;$dongu<=60;$dongu++){
  $bakiye += $bakiye*15/100;
  $bakiye += 7000000;
  echo "$dongu. ayda kazanç: ".$bakiye."<br>";
}
?>
</body>
</html>
