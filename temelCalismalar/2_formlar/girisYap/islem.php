<?php
session_start();
if($_POST['kullanıcı_Adi']=="emir" && $_POST['sifre']=="123456"){
  $_SESSION['kadi']="emir";
}
header("Location:index.php");
