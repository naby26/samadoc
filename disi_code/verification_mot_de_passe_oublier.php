<?php
session_start();
function passgen2($nbChar){
    return substr(str_shuffle(
'abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789@-_'),1, $nbChar);}

$psw = passgen2(12);

$con = mysqli_connect('localhost','root', '','samadoc');

if(isset($_POST['envoyer_o'])){
    $mail = $_POST['mail_o'];
    $ine = $_POST['ine_o'];

    $req = mysqli_query($con,"SELECT * FROM sd_etudiant WHERE username='$ine' AND mail='$mail'");

    $nbr = mysqli_num_rows($req);
    $tab = mysqli_fetch_array($req);

    if($tab['status']== 2){
        $_SESSION['notif']="Impossible de vous generer un nouveau mot de passe car votre est bloque veillez vous signaler au pres de l'administrateur";
        header("location: http://localhost/samadoc/mot-de-passe-oublier/");
    }
    else{
    if($nbr>0){
        $sujet = 'Réinitialisation de mot de passe';
        $message = '
        <div style="width: 50%; margin-left:auto;margin-right:auto;">
        <div>
            <h1>Renouvellement de mot de passe</h1>
            <p>
                votre mot de passe est réinitialisé à: '.$psw.'
            </p>
        </div>

        </div>';

        $header = "From:\"nash\"<caambdiop.officiel@gmail.com>\n";
        $header .="Reply-To:caambdiop.officiel@gmail.com\n";
        $header .="Content-Type:text/html; charset=\"iso-8859-1\"";


        if(mail($mail,$sujet,$message,$header)){
            $req1 = mysqli_query($con,"UPDATE sd_etudiant SET `password`='$psw' WHERE username='$ine'");
            $_SESSION['notif'] = "Votre demande de réinitialisation est effective. Veuillez consulter votre mail.";
            header("Location: http://localhost/samadoc/connexion/");
        }
    }
    else{
        $_SESSION['notif'] = "Votre mail et/ou ine est non valide !";
        header("Location: http://localhost/samadoc/mot-de-passe-oublier/");
    }
}
}
mysqli_close($con);

?>