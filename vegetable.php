<?php
session_start();
if (!(isset($_SESSION['username'])   && time()-$_SESSION['lastactive'] <  10 )){
    echo ("time out");
    include ("login.html");
    die();
}
$_SESSION['lastactive']=time();
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
<h1>welcome to harvest super</h1>
<h4> you are login as <?php echo $_SESSION['username']?></h4>
<h4><a href="logout.php"> logout </a></h4>
<h1>vegetables</h1>
<table border="1">
    <tr>
        <th>item </th>
        <th>price</th>
    </tr>
    <tr>
        <td>mint</td>
        <td>200</td>
    </tr>
    <tr>
        <td>potato</td>
        <td>100</td>
    </tr>
    <tr>
        <td>tomato</td>
        <td>120</td>
    </tr>
</table>

</body>
</html>
