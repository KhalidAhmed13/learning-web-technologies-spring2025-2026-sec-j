<?php
    $message = "";

    if(isset($_REQUEST['submit'])){

        $gender = $_REQUEST['gender'] ?? "";

        if($gender == ""){
            $message = "null gender!";
        }else{
            $message = "Selected Gender: ".$gender;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender</title>
</head>
<body>
    <form method="post" action="B.php" enctype="multipart/form-data">
        <fieldset style="width: 500px;">
            <legend><b>GENDER</b></legend>

            <input type="radio" name="gender" value="Male"/> Male
            <input type="radio" name="gender" value="Female"/> Female
            <input type="radio" name="gender" value="Other"/> Other

            <br><br><hr><br>

            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

    <br>
    <?php echo $message; ?>
</body>
</html>