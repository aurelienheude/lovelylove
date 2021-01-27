<?php 

function validation($donnee){
    if (!empty($donnee)){
        $donnée = trim($donnee); //retire les espaces
        $donnée = stripslashes($donnee); // retire les /
        $donnée = htmlspecialchars($donnee); // retire les caractéres spéciaux comme ><
        return $donnee;
    }
    else{
        header('Location: index.php');
        exit;
    }

}

if (isset($_POST['sexe'])) {
    if( $_POST['sexe'] == 'Homme' || $_POST['sexe'] == 'Femme'  ){
    setcookie ( 'gender',  $_POST['sexe'] , time()+60 ) ;
    }
    else{
    header('Location: index.php');
    exit;
    }
}

if (isset($_POST['name'])) {
    $cookieName = validation($_POST['name']);
    setcookie ( 'firstname',  $cookieName , time()+60 ) ;
} 
    
if (isset($_POST['lastname'])) {
    $cookieLast = validation($_POST['lastname']);
    setcookie ( 'lastname',   $cookieLast , time()+60 ) ;
} 

if (isset($_POST['mail'])) {
    $cookieMail = validation($_POST['mail']);
    setcookie ( 'mail',  $cookieMail , time()+60 ) ;
} 

if (isset($_POST['zipcode'])) {
    $cookieZip = trim($_POST['zipcode']);

    if (gettype($cookieZip) == 'integer'){
        setcookie ( 'zipcode',   $cookieZip , time()+60 ) ;
    }
    else{
        header('Location: index.php');
        exit;
    }
} 

if (isset($_POST['age'])) {
    $cookieAge = trim($_POST['age']);

    if (gettype($cookieAge) == 'integer'){
    setcookie ( 'age',  $cookieAge , time()+60 ) ;
    }
    else{
     header('Location: index.php');
        exit;
    }
} 

if (isset($_POST['search'])) {
    setcookie ( 'search',  $_POST['search'] , time()+60 ) ;
} 

if (isset($_POST['interest'])) {
    setcookie ( 'interest',  $_POST['interest'] , time()+60 ) ;
} 


?>