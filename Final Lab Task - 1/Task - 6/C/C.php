<?php
    $blood = "";
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
    <form method="post" action="C.php" enctype="multipart/form-data">
        <fieldset style="width: 500px;">
            <legend><b>BLOOD GROUP</b></legend>

            <select name="blood">
                <option value="">Select</option>
                <option value="A+" <?php if($blood=="A+"){echo "selected";} ?>>A+</option>
                <option value="A-" <?php if($blood=="A-"){echo "selected";} ?>>A-</option>
                <option value="B+" <?php if($blood=="B+"){echo "selected";} ?>>B+</option>
                <option value="B-" <?php if($blood=="B-"){echo "selected";} ?>>B-</option>
                <option value="O+" <?php if($blood=="O+"){echo "selected";} ?>>O+</option>
                <option value="O-" <?php if($blood=="O-"){echo "selected";} ?>>O-</option>
                <option value="AB+" <?php if($blood=="AB+"){echo "selected";} ?>>AB+</option>
                <option value="AB-" <?php if($blood=="AB-"){echo "selected";} ?>>AB-</option>
            </select>

            <br><br><hr><br>

            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

    <br>
    <?php echo $message; ?>
</body>
</html>