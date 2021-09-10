<?php
/*Template name: connexion */
get_header();
?>
<style>
    .page-id-12{
        background-image: url("http://localhost/samadoc/wp-content/uploads/2021/09/USSEIN-LOGO.png");
        background-repeat: no-repeat;
        background-size: cover;
        /* filter: blur(8px);
        -webkit-filter: blur(8px); */
    }
   .form{
       position: absolute;
       left: 50%;
       top:50%;
       width: 500px;
       margin-left: -250px;
       height: 400px;
       margin-top: -200px;
       background-color: rgba(0, 0, 0, 0.5);
       text-align: center;
       display: flex;
       justify-content: center;
       box-shadow: -0px -20px 30px rgba(0, 0, 0, 0.2);
       border-radius: 5%;
   }
   .form input{
       margin: auto;
       width: 400px;
       margin-bottom: 3%;
       color: rgba(255,255,255,1);
   }
   .form form img{
       width: 200px;
       margin-top: 2%;
   }
   .form form h2{
       font-size: 1.8em;
       color: #00eda4;
   }
   input[type=submit]{
       width: 400px;
       height: auto;
    } 
   label{
       color: red;
   }
   #username, #password{
       background-color: rgba(0, 0, 0, 0.4);
   }

   #a_form{
       font-size: 1.3em;
   }
   @media(max-width:600px){
       .form{
        width: 250px;
       margin-left: -125px;
       height: 300px;
       margin-top: -150px;
       }
       .form input{           
       width: 200px;
       height: 30px;
       }
       input[type=submit]{
       width: 200px;
       height: 30px;
       padding: 5px;
       /* text-align: center; */
    }

    .form form h2{
       font-size: 1.2em;
   }
   .form form img{
       width: 100px;
       margin-top: 2%;
   }
   #a_form,.lab_con{
       font-size: 0.7em;
   }
   }
    

</style>
<div class="form">
<form action="http://localhost/samadoc/disi_code/verification.php" method="POST">
<!-- <fieldset>
<legend>
                Connexion
</legend> -->
<img src="http://localhost/samadoc/wp-content/uploads/2021/09/samadoc.png" alt="Logo Samadoc">
<h2>Connexion</h2>
<input type="text" name="username" id="username" placeholder="INE" required="">
<input type="password" name="password" id="password" placeholder="Mot de passe" required="">
<label class="lab_con">
<?php
if(isset($_SESSION['message_erreur'])){
    echo $_SESSION['message_erreur'];
    unset($_SESSION['message_erreur']);
}
?>
</label><br>
<a id="a_form" href="http://localhost/samadoc/mot-de-passe-oublier/">Mot de passe oublier</a><br>
<input type="submit" value="se connecter">
<!-- </fieldset> -->
</form>
</div>