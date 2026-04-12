<?php
    if(isset($_REQUEST['submit'])){

        $dd = $_REQUEST['dd'];
        $mm = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if($dd == "" || $mm == "" || $yyyy == ""){
            echo "null date of birth!";
        }else{
            echo "Entered Date of Birth: ".$dd."/".$mm."/".$yyyy;
        }
    }
?>