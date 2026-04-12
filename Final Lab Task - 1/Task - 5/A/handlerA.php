<?php
    if(isset($_REQUEST['submit'])){

        $degree = $_REQUEST['degree'] ?? array();

        if(empty($degree)){
            echo "null degree!";
        }else{
            echo "Selected Degree(s): ".implode(", ", $degree);
        }
    }
?>