<?php
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        
        if($username == ""){
            echo "null name!";
        }else{
            echo "Entered Name: ".$username;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name Input</title>
</head>
<body> 
    <form method="post" action="A.php" enctype="multipart/form-data">
        Name: <input type="text" name="username"/> <br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>