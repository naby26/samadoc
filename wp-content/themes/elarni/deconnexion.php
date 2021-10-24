 <?php

/*Template name: deconnexion */
session_start();
session_destroy();
header('Location:http://localhost/samadoc');