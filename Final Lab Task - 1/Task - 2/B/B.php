<?php
    $message = "";

    if(isset($_REQUEST['submit'])){

        $email = $_REQUEST['email'];
        
        if($email == ""){
            $message = "null email!";
        }else{
            $message = "Entered Email: ".$email;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Input</title>
</head>
<body> 
    <form method="post" action="B.php" enctype="multipart/form-data">
        Email: <input type="text" name="email"/> <br>
        <input type="submit" name="submit" value="Submit"/>
    </form>

    <br>
    <?php echo $message; ?>
</body>
</html>