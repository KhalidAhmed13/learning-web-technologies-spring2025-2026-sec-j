<?php
    $message = "";

    if(isset($_REQUEST['submit'])){

        $blood = $_REQUEST['blood'];

        if($blood == ""){
            $message = "null blood group!";
        }else{
            $message = "Selected Blood Group: ".$blood;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group</title>
</head>
<body>
    <form method="post" action="B.php" enctype="multipart/form-data">
        <fieldset style="width: 500px;">
            <legend><b>BLOOD GROUP</b></legend>

            <select name="blood">
                <option value="">Select</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>

            <br><br><hr><br>

            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

    <br>
    <?php echo $message; ?>
</body>
</html>