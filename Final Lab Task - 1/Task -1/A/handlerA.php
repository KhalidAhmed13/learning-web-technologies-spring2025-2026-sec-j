<?php
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        
        if($username == ""){
            echo "null name!";
        }else{
            echo "Entered Name: ".$username;
        }
    }
?>