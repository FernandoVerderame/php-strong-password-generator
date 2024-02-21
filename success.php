<?php 

session_start();

$alert_class = 'alert-info';
$alert_message = "La tua password è: <strong>{$_SESSION['password']}</strong>";
$page_title = 'Success Page';

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<!-- Head --> 
<?php include __DIR__ . '/includes/layouts/head.php' ?>

<body class="bg-primary-subtle">
    <div class="container">
        <div class="password-alert mt-4">

        <!-- Alert -->
        <?php include __DIR__ . '/includes/templates/alert.php' ?>

        </div>
    </div>
</body>
</html>