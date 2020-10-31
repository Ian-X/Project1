<?php
    if($_POST['qname']){
        if(strlen($_POST['qname']) < 3){
            echo "Question Name must be at least 3 characters.";
        }
        else{
            echo "Question Name: ";
            echo $_POST['qname'];
        }
    }
    else{
        echo "Empty question name field";
    }
    echo "<br>";
    if($_POST['qbody']){
        if(strlen($_POST['qbody']) > 500){
            echo "Question body too big. Questions must be at most 500 characters.";
        }
        else{
            echo "Question Body: ";
            echo $_POST['qbody'];
        }
    }
    else{
        echo "Empty question body field";
    }
    echo "<br>";
    if($_POST['skills']){
        if(!strpos($_POST['skills'], ",")){
            echo "Skills require more than one element separated with a comma.";
        }
        else{
            echo "Skills: ";
            $s = explode(",", $_POST['skills']);
            foreach ($s as $i){
                echo "<br>";
                echo $i;
            }

        }
    }
    else{
        echo "Empty skills field";
    }
?>