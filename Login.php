<?php
    if($_POST['email']){
        if(!strpos($_POST['email'],"@")){
            echo "email must include @.";
        }
        else{
            echo "Email: ";
            echo $_POST['email'];
        }
    }
    else{
        echo "Empty email field";
    }
    echo "<br>";
    if($_POST['pass']){
        if(strlen($_POST['pass']) < 8){
            echo "Password too short. Must be at least 8 character.";
        }
        else{
            echo "Password: ";
            echo $_POST['pass'];
        }
    }
    else{
        echo "Empty password field";
    }
?>
