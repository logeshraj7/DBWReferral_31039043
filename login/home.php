<?php
session_start();
if ($_SESSION["firstName"]=="") {
    header('Location: index.html');
}
$firstName = $_SESSION["firstName"];
$lastName = $_SESSION["lastName"];
$roles = $_SESSION["roles"];

?>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body style="background-color: #FFFDD0">
    <ul>
        <li>
            <h2>Mini Blackboard Sheffield Hallam University</h2>
        </li>
        <li><img class="logo" src="logo.png" height=75px width=75px></li>
        <li>
            <h4 style="margin-top: 40px;"><?php echo $roles; ?></h4>
        </li>
        <li><a href="logout.php">
                <h3>Logout</h3>
            </a></li>
    </ul>
    <h1 style="margin-left: 40px;">Hello <?php echo $firstName . " " . $lastName; ?></h1>
    <h3 style="margin-left: 40px;">Welcome to Mini Blackboard</h3>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <p>© May 2022- Mohd Zairul Mazwan Jilani</p>
    </footer>
</body>

</html>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: white;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    footer {
        display: flex;
        justify-content: Left;
        padding: 2px;
        background-color: #DE3163;
        color: #fff;
    }

    .button {
        background-color: #DE3163;
    }
</style>