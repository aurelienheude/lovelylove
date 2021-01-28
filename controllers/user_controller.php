<?php 

if(isset($_POST["description_users"]))
{
    if(isset($_POST["description"]))
    {
        setcookie ("description", $_POST["description"] , time()+86400, "/") ;
        header("Location: ../views/users.php");
        exit;
    }
}




?>