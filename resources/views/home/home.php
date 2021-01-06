<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>My Home Page</h1>
    <ul>
        <li><a href="<?php

use Illuminate\Support\Facades\URL;

echo url('bangla'); ?>">Home</a></li>
        <li><a href="<?php echo URL::to('bangla') ?>">About</a></li>
    </ul>
</body>
</html>