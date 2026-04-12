<?php
    $message = "";

    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        
        if($username == ""){
            $message = "null name!";
        }else{
            $message = "Entered Name: ".$username;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name Input</title>
</head>
<body> 
    <form method="post" action="B.php" enctype="multipart/form-data">
        Name: <input type="text" name="username"/> <br>
        <input type="submit" name="submit" value="Submit"/>
    </form>

    <br>
    <?php echo $message; ?>
</body>
</html>