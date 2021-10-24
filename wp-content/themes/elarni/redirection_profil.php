
 <?php 
/*Template name: redirection_profile*/

      if($_SESSION['status']==0){
      
      header("location:http://localhost/samadoc/profil-utilisateur/");
      }
      else if($_SESSION['status']==1){ 
        header("location:http://localhost/samadoc/profil-administrateur/");
      } 
      