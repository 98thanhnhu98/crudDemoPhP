<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    $result = mysqli_query($link, "update employee set name='$name',email='$email',salary='$salary' where id = $id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($link, "select * from employee where id = $id");
while ($employee_data = mysqli_fetch_array($result)) {
    $name = $employee_data['name'];
    $email = $employee_data['email'];
    $salary = $employee_data['salary'];
}
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Edit Student</title>
</head>

<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 style="text-align:center;">Update Personas</h3>
            </div>
            <div class="card-body">
                <form action="edit.php" method="POST" name="update_employee">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" value=<?php echo $name; ?> class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="number" name="email" value=<?php echo $email; ?> class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salary</label>
                            <input type="number" name="salary" value=<?php echo $salary; ?> class="form-control" required>
                        </div>
                        <div class="form-group">
                            <br>
                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                            <input class="btn btn-danger" type="submit" name="update" value="Update"> <a style="margin-left: 10px;" href="index.php" class="btn btn-danger">Home</a> 
                        </div>
                    </form>

                </form>
            </div>
        </div>
    </div>
</body>

</html>