<?php
    if($_POST['fname']){
        echo $_POST['fname'];
    }
    else{
        echo "Empty first name field";
    }
    echo "<br>";
    if($_POST['lname']){
        echo $_POST['lname'];
    }
    else{
        echo "Empty last name field";
    }
    echo "<br>";
    if($_POST['bday']){
        echo $_POST['bday'];
    }
    else{
        echo "Empty birthday field";
    }
    echo "<br>";
    if($_POST['email']){
        if(!strpos($_POST['email'],"@")){
            echo "email must include @.";
        }
        else{
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
            echo $_POST['pass'];
        }
    }
    else{
        echo "Empty password field";
    }
?>