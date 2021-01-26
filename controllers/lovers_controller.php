<?php 

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