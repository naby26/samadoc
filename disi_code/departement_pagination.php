<?php
session_start();
$_SESSION['page'] =(int)$_GET['page'];
header("Location: http://localhost/samadoc/dept-".$_SESSION['nom_page']);
?>