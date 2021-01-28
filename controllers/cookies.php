<?php 

function validation($donnee){
    if (!empty($donnee)){
        $donnée = trim($donnee); //retire les espaces
        $donnée = stripslashes($donnee); // retire les /
        $donnée = htmlspecialchars($donnee); // retire les caractéres spéciaux comme ><
        return $donnee;
    }
    else{
        unset($_POST["name"]);
        setcookie('firstname')  ;
        header("Location: index.php");
        exit;
    }
    }



if (isset($_POST["sexe"])) {
    if( $_POST["sexe"] == "Homme" || $_POST["sexe"] == "Femme"  ){
    setcookie ( "gender",  $_POST["sexe"] , time()+86400 ) ;
    }
    else{
    header("Location: index.php");
    exit;
    }
}

if (isset($_POST["name"])) {
    if (isset($_POST["lastname"]) && isset($_POST["mail"])
    && isset($_POST["zipcode"])) {
        $cookieName = validation($_POST["name"]);
        setcookie ( "firstname",  $cookieName , time()+86400 ) ;

        $cookieLast = validation($_POST["lastname"]);
        setcookie ( "lastname",   $cookieLast , time()+86400 ) ;
        
        $cookieMail = validation($_POST["mail"]);
        setcookie ( "mail",  $cookieMail , time()+86400 ) ;

        $cookieZip = trim($_POST["zipcode"]);
        $cookieZip = (int)$cookieZip;

        if ($cookieZip != 0 ){
            setcookie ( "zipcode",   $cookieZip , time()+86400 ) ;
        }
        else{
            unset($_POST["name"]);
            unset($_COOKIE['firstname']);
            header("Location: index.php");
            exit;
        } 
    }
    else {
        unset($_POST["name"]);
        header("Location: index.php");
        exit;
    }
    }


if (isset($_POST["age"])) {
    $cookieAge = trim($_POST["age"]);
    $cookieAge = (int)$cookieAge;
    if (($cookieAge) != 0){
        setcookie ( "age",  $cookieAge , time()+86400 , '/') ;
        }
        else{
         header("Location: ../index.php");
            exit;
        }
} 

if (isset($_POST["search"])) {
    setcookie ( "search",  $_POST["search"] , time()+86400, '/') ;
} 

if (isset($_POST["interest"])) {
    setcookie ( "interest",  $_POST["interest"] , time()+86400,'/') ;
} 

?>