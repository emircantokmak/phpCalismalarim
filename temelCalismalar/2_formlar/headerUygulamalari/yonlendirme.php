<?php
//Kodlab.tv ye yönlendirme
header("Location:https://www.kodlab.tv");
//yönlendirme sonrası herhangi bir kodun çalışmasına engel olmak için
exit;
//3 saniye sonra yönlendirme
header("Refresh:3;url=https://wwww.kodlab.tv");
echo "3 saniye sonra yönlendiriliyorsunuz...";
 ?>
