<?php
session_start();
session_destroy();
header('Location: reciclagem.php');
exit();

?>