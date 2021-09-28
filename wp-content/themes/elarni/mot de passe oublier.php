<?php
/*Template name: mot de passe oublier */
get_header();
?>

<style>
    .page-id-443{
        background-image: url("http://localhost/samadoc/wp-content/uploads/2021/09/USSEIN-LOGO.png");
        background-repeat: no-repeat;
        background-size: cover;
        /* filter: blur(8px);
        -webkit-filter: blur(8px); */
    }
body{
    margin:auto;
    width:500px;
}
    .form{
        /* position: absolute;
       left: 50%;
       top:50%;
       width: 500px;
       margin-left: -250px;
       height: 400px;
       margin-top: -200px;
       
       text-align: center; */
       margin-top: 20vh;
       display: flex;
       flex-direction:column;
       padding: 1em;
       width: 500px;
       height:auto;
       justify-content: center;
       box-shadow: -0px -20px 30px rgba(0, 0, 0, 0.2);
       border-radius: 5%;
       background-color: rgba(0, 0, 0, 0.5);
    }
    .input_o{
        margin: auto;
       width: 400px;
       color: rgba(255,255,255,1);
    }
    .form form h2{
       font-size: 1.8em;
       color: #00eda4;
   }
   
.form form img{
       width: 200px;
       margin-top: 2%;
   }
#envoyer_o{
       width: 400px;
       height: auto;
    } 
    #ine_o, #mail_o{
       background-color: rgba(0, 0, 0, 0.4);
       
       margin-bottom: 5%;
   }
   .lab_con{
       color: red;
   }
    @media(max-width:600px){
        .form{
        width: 250px;
       margin-left: -125px;
       height: 300px;
       margin-top: -150px;
    }
    .input_o{           
       width: 200px;
       height: 30px;
       }
       .form form h2{
          font-size: 1.2em;
           }
      .form form img{
          width: 100px;
          margin-top: 2%;
           }
       #envoyer_o{
       width: 200px;
       height: 30px;
       margin: 0px 0px 6px;
       padding: 5px;
       /* text-align: center; */
        }

    }

    label.notif{
        font-size:large;
        color:#00eda4;
    }

</style>
    <div class="form">
    <form method="POST" action="http://localhost/samadoc/disi_code/verification_mot_de_passe_oublier.php">
    <img src="http://localhost/samadoc/wp-content/uploads/2021/09/samadoc.png" alt="Logo Samadoc">
        <h2>Réinitialisation de mot de passe</h2>

        <label class="notif">
        <?php
if(isset($_SESSION['notif'])){
    echo $_SESSION['notif'];
    unset($_SESSION['notif']);
}
?>
</label><br><br>

        <input type="text" name="mail_o" id="mail_o" placeholder="E-mail" required class="input_o saisi_o">
        <input type="text" name="ine_o" id="ine_o" placeholder="INE" required class="input_o saisi_o"><br>
  
        <input type="submit" name="envoyer_o" value="Envoyer" class="input_o" id="envoyer_o">
    </form>
</div>

