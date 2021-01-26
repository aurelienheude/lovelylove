<?php 

if (isset($_POST['sexe'])) {
    setcookie ( 'gender',  $_POST['sexe'] , time()+60 ) ;
    }
    if (isset($_POST['name'])) {
    setcookie ( 'firstname',  $_POST['name'] , time()+60 ) ;
    } 
    
    if (isset($_POST['lastname'])) {
    setcookie ( 'lastname',  $_POST['lastname'] , time()+60 ) ;
    } 
    
    if (isset($_POST['mail'])) {
    setcookie ( 'mail',  $_POST['mail'] , time()+60 ) ;
    } 
    
    if (isset($_POST['zipcode'])) {
    setcookie ( 'zipcode',  $_POST['zipcode'] , time()+60 ) ;
    } 
    
if (isset($_POST['age'])) {
setcookie ( 'age',  $_POST['age'] , time()+60 ) ;
}
if (isset($_POST['search'])) {
setcookie ( 'search',  $_POST['search'] , time()+60 ) ;
} 

if (isset($_POST['interest'])) {
setcookie ( 'interest',  $_POST['interest'] , time()+60 ) ;
} 




?>