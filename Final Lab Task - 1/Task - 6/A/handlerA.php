<?php
    if(isset($_REQUEST['submit'])){

        $blood = $_REQUEST['blood'];

        if($blood == ""){
            echo "null blood group!";
        }else{
            echo "Selected Blood Group: ".$blood;
        }
    }
?>