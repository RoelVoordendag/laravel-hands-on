<?php
/**
 * Created by PhpStorm.
 * User: rvoor
 * Date: 30-8-2017
 * Time: 13:07
 */
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
<h1>hallo ik ben <?= $name ?> </h1>

<ul>
    @foreach ($task as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
</body>
</html>
