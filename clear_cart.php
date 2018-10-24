<?php
setcookie("pid", "", time()-1);
header("location:index.php");
?>