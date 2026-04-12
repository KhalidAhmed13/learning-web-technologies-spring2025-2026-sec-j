<?php
    if(isset($_REQUEST['submit'])){

        $gender = $_REQUEST['gender'] ?? "";

        if($gender == ""){
            echo "null gender!";
        }else{
            echo "Selected Gender: ".$gender;
        }
    }
?>