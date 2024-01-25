<?php session_start(); ?>
<DOCTYPE html>
<html>
<head><title>Giriş Yap</title>
<link rel="stylesheet" href="assets/style.css" type="text/css">
</head>
<body>
  <?php
   if(!isset($_SESSION['kadi'])){?>
     <div class="header">
       <div id="girisBolumu"><a href="girisFormu.php">Giriş</a></div>
     </div>
  <?php } else{?>
    <div class="header">
      <div id="girisBolumu"><?php echo $_SESSION['kadi']; ?></div>
      <div id="girisBolumu"><a href="cikis.php">Çıkış</a></div>
    </div>
  <?php }?>
</body>
</html>
