<?php
session_start();
$_SESSION['page'] =(int)$_GET['page'];
header("Location: http://localhost/samadoc/resultat_recherche");
?>