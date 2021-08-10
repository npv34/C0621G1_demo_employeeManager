<?php
include_once "../vendor/autoload.php";

$employeeManager = new \src\EmployeeManager('../data.json');

$index = $_GET['index'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employeeManager->update($index, $_POST);
    header('location: ../index.php');
}
$employeeCurrent = $employeeManager->getEmployeeByIndex($index);


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
<form action="" method="post">
    <table>
        <tr>
            <td>FirstName</td>
            <td><input type="text" name="first_name" value="<?php echo $employeeCurrent->firstName ?>"></td>
        </tr>
        <tr>
            <td>LastName</td>
            <td><input type="text" name="last_name" value="<?php echo $employeeCurrent->lastName ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $employeeCurrent->address ?>"></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td><input type="date" name="birthday" value="<?php echo $employeeCurrent->birthday ?>"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><select name="role" id="">
                    <option value="user"
                        <?php if ($employeeCurrent->role == 'user'): ?>
                            selected
                        <?php endif ?>

                    >User
                    </option>
                    <option
                        <?php if ($employeeCurrent->role == 'admin'): ?>
                            selected
                        <?php endif ?>
                            value="admin">Admin</option>
                </select></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Update</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>