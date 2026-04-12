<?php
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
    <form method="post" action="B.php" enctype="multipart/form-data">
        <fieldset style="width: 500px;">
            <legend><b>DEGREE</b></legend>

            <input type="checkbox" name="degree[]" value="SSC"/> SSC
            <input type="checkbox" name="degree[]" value="HSC"/> HSC
            <input type="checkbox" name="degree[]" value="BSc"/> BSc
            <input type="checkbox" name="degree[]" value="MSc"/> MSc

            <br><br><hr><br>

            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

    <br>
    <?php echo $message; ?>
</body>
</html>