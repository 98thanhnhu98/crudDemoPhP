<?php
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    include_once("config.php");

    $result = mysqli_query($link , "insert into employee(name,email,salary) values('$name','$email','$salary')");

    echo "User Add Successfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <a href="index.php">Go to home</a>
    <br>
    <br>
    <form action="create.php" method="POST" name="form">
        <table width="25%">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="number" name="salary"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>