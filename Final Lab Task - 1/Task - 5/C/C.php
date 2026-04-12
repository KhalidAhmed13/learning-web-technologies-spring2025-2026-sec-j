<?php
    $degree = array();
    $message = "";

    if(isset($_REQUEST['submit'])){

        $degree = $_REQUEST['degree'] ?? array();

        if(empty($degree)){
            $message = "null degree!";
        }else{
            $message = "Selected Degree(s): ".implode(", ", $degree);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree</title>
</head>
<body>
    <form method="post" action="C.php" enctype="multipart/form-data">
        <fieldset style="width: 500px;">
            <legend><b>DEGREE</b></legend>

            <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC",$degree)){echo "checked";} ?>/> SSC
            <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array("HSC",$degree)){echo "checked";} ?>/> HSC
            <input type="checkbox" name="degree[]" value="BSc" <?php if(in_array("BSc",$degree)){echo "checked";} ?>/> BSc
            <input type="checkbox" name="degree[]" value="MSc" <?php if(in_array("MSc",$degree)){echo "checked";} ?>/> MSc

            <br><br><hr><br>

            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

    <br>
    <?php echo $message; ?>
</body>
</html>