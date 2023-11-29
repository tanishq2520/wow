<?php
    // include("header.php");
    // include("login.php");
    // include("role.php");
    // include("category_manage.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sidebar {
            width: 20%;
            height: 100vh;
            background-color: #ffffff;
            position: fixed;
            top: 0;
            left: 0;
            border-right: 2px dashed black;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            padding: 10px;
            border-bottom: 2px dashed black;
            font-weight: 700;
        }
        .sidebar ul li a {
            color: black;
            font: optional;
            text-decoration: none;
        }
        .sidebar ul li a:hover {
            color: blue;
        }
        .sidebar h1 {
            text-align: center;
            padding: 10px;
            margin: 0;
            color: green;
            border-bottom: 2px solid green;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>Admin Panel</h1>
        <ul>
            <!-- <img src="" alt="no img"> -->
            <li><a href="login.php">Login :-</a></li>
            <li><a href="category.php">Category :-</a></li>
            <li><a href="category_manage.php">Manage Category :-</a></li>
            <li><a href="book.php">Book :-</a></li>
            <li><a href="book_manage.php">Manage Book :-</a></li>
            <li><a href="role.php">Role</a></li>
            <li><a href="role_manage.php">Manage Role</a></li>
            <li><a href="employee.php">Employee</a></li>
            <li><a href="employee_manage.php">Manage Employee</a></li>
        </ul>
    </div>
</body>
</html>
