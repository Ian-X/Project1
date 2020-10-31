<?php
    if($_POST['email']){
        if(strpos($_POST['email'],"@")){
            echo "email must include @.";
        }
        else{
            echo $_POST['email'];
        }
    }
    else{
        echo "Empty email field";
    }
?>
