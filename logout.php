<?php
include 'db/init.php';

        if(isset($_SESSION['userID'])){
            echo "<center>You need to be logged in to log out!</center>";
        }else{
            session_destroy();
            //echo "<center>You have successfully logged out!";
            header('Location: index.html');
         }
?>
