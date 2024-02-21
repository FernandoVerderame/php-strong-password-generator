<?php 

session_start();

$alert_class = 'alert-info';
$alert_message = "La tua password è: <strong>{$_SESSION['password']}</strong>";

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Success</title>
</head>
<body class="bg-primary-subtle">
    <div class="container">
        <div class="password-alert mt-4">
            <div class="alert <?= $alert_class ?> ps-4" role="alert">
                <?= $alert_message ?>
            </div>
        </div>
    </div>
</body>
</html>