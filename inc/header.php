<?php require_once './config/app.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-rtl.css">
    <link rel="stylesheet" href="./css/custom.css">
    <title>كتب شل</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light ">
    <a class="navbar-brand" href="<?php echo $config['appUrl'] ?>">كتب</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo $config['appUrl'] ?>">الرئيسية </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">الاقسام</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">التواصل معنا</a>
            </li>

        </ul>

    </div>
</nav>