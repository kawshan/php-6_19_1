<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
</head>
<body>
<h4>you are successfully logout</h4>
<h1>come again</h1>
<hr>
<?php
session_start();
session_destroy();
include('login.html');
?>
</body>
</html>