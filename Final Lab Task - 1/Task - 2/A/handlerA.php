<?php
    if(isset($_REQUEST['submit'])){

        $email = $_REQUEST['email'];
        
        if($email == ""){
            echo "null email!";
        }else{
            echo "Entered Email: ".$email;
        }
    }
?>