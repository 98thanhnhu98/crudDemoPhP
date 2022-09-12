<?php
include_once("config.php");

$result = mysqli_query($link, "select * from employee order by id desc");
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Student Management</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 style="text-align:center;color:red">Personas</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover" width='40%'>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($employee_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $employee_data['name'] . "</td>";
                        echo "<td>" . $employee_data['email'] . "</td>";
                        echo "<td>" . $employee_data['salary'] . "</td>";
                        echo "<td><a href='edit.php?id=$employee_data[id]'>Edit</a> |
                <a href='delete.php?id=$employee_data[id]'>Delete</a></td></tr>";
                    }
                    ?>
                </table>
                <a class="btn btn-danger" href="create.php">Add employee</a>
            </div>
        </div>
    </div>
</body>

</html>