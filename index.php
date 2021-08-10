<?php
include_once "src/Employee.php";
include_once "src/EmployeeManager.php";


$employeeManager = new \src\EmployeeManager('data.json');

$employees = $employeeManager->getListEmployee();



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>STT</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Address</td>
        <td>Role</td>
        <td></td>
    </tr>
    <?php foreach ($employees as $key => $employee): ?>
    <tr>
        <td><?php echo $key + 1 ?></td>
        <td><?php echo $employee->firstName ?></td>
        <td><?php echo $employee->lastName ?></td>
        <td><?php echo $employee->address ?></td>
        <td><?php echo $employee->role ?></td>
        <td><a href="views/edit.php?index=<?php echo $key ?>">Edit</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
