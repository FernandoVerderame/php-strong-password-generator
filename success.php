<?php 

session_start();

if (!isset($_SESSION['password'])) header('Location: index.php');

$page_title = 'Success Page';
$alert_class = 'alert-info';
$alert_message = "La tua password è: <strong>{$_SESSION['password']}</strong>";

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

        <a href="index.php?new=true">Genera una nuova password</a>
    </div>
</body>
</html>