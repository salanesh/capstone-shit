<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Controller</title>
</head>   
<body>
    <?php
    require("../custom-php/connector.php");
    $roleSelected = $_POST["rolekey"];
    $empFname = $_POST["fname"];
    $empLname = $_POST["lname"];
    $empMname = $_POST["mname"];
    $empBday = $_POST["empbday"];
    $empAddress = $_POST["empaddress"];
    $empEmail = $_POST["empemail"];
    $empPassword = $_POST["emppassword"];
    $empStatus = 1;

    //use var_dump to check if the variables are holding the right data
    // var_dump($empFname);
    // echo("<br>");
    // var_dump($empMname);
    // echo("<br>");
    // var_dump($empLname);
    // echo("<br>");
    // var_dump($empBday);
    // echo("<br>");
    // var_dump($roleSelected);
    // echo("<br>");
    // var_dump($empAddress);
    // echo("<br>");
    // var_dump($empEmail);
    // echo("<br>");
    // var_dump($empPassword);

    $statement = $connection->prepare("INSERT INTO users(roleID,fName,lName,mName,userAddress,email,userPass,userStatus,userBday) values(?,?,?,?,?,?,?,?,?)");
    $statement->bind_param("issssssis",$roleSelected,$empFname,$empLname,$empMname,$empAddress,$empEmail,$empPassword,$empStatus,$empBday);
    $statement->execute();
    // echo('the shit has been added');
    
    $statement->close();
    $connection->close();

    header("../staff-view/staff-manage-employees.php");
    ?>
</body>
</html>