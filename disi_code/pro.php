

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul class="ul1">
        <li>
            <img src="avatar.png" alt="">
        </li>
        <ul class="ul2">
            <li>mon profil</li>
            <li>deconnexion</li>
        </ul>
        
    </ul>
  <style>

img {
    width: 50px;
    height: auto;

        
    }
.ul2{
    display: flex;
    flex-direction: column;
    /*visibility: hidden; */
    list-style: none;

}
.ul1 li:hover.ul2{
    visibility: visible;

}
.ul1{
    float:right;
    display:-webkit-inline-box ;
    list-style: none;
}

</style>  
</body>
</html>





