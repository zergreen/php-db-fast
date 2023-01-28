<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <head>

        <!-- boostrap css & js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <!-- boostap icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    </head>
</head>

<body>
    <div class="container">
        <center>
            <h1><?php echo $head_title ?></h1>
            <hr class="hr">
        </center>
        <form action="RESULT.php" method="POST">

            <table class="table table-hover table-bordered table-striped text-center">
                <caption>รหัสลูกค้า - </caption>
                <thead class="table-dark">
                    <th>#</th>
                    <th>P-Id</th>
                    <th>PName</th>
                    <th>PricePerUnit</th>
                    <th>Qty</th>
                </thead>
                <tbody>