<?php //redirection de l'utilisateur si les cookies de garry n'existe pas !
if(
    isset($_COOKIE['firstname']) == False 
||  isset($_COOKIE['lastname']) == False
||  isset($_COOKIE['gender']) == False 
||  isset($_COOKIE['mail']) == False
||  isset($_COOKIE['zipcode']) == False)

{
    header("Location: ../index.php");
    exit;
}
?>