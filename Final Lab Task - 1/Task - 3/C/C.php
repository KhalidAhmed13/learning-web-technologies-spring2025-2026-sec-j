<?php
    $dd = "";
    $mm = "";
    $yyyy = "";
    $message = "";

    if(isset($_REQUEST['submit'])){

        $dd = $_REQUEST['dd'];
        $mm = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if($dd == "" || $mm == "" || $yyyy == ""){
            $message = "null date of birth!";
        }else{
            $message = "Entered Date of Birth: ".$dd."/".$mm."/".$yyyy;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date of Birth</title>
</head>
<body>
    <form method="post" action="C.php" enctype="multipart/form-data">
        <fieldset style="width: 500px;">
            <legend><b>DATE OF BIRTH</b></legend>

            dd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>
            <input type="text" name="dd" size="5" value="<?php if(isset($_POST['dd'])){echo $dd;} ?>"/> /
            <input type="text" name="mm" size="5" value="<?php if(isset($_POST['mm'])){echo $mm;} ?>"/> /
            <input type="text" name="yyyy" size="8" value="<?php if(isset($_POST['yyyy'])){echo $yyyy;} ?>"/>
            <br><br><hr><br>

            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>

    <br>
    <?php echo $message; ?>
</body>
</html>