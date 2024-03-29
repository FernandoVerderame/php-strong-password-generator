<?php

session_start();

if (isset($_GET['new'])) {
    session_destroy();
}

if (!empty($_SESSION['password'])) header('Location: success.php');

$page_title = 'Home';

require __DIR__ . '/includes/scripts/form_validation.php';

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<!-- Head -->
<?php include __DIR__ . '/includes/layouts/head.php' ?>

<body class="bg-primary-subtle">
    <div class="container mt-3">
        <main>
            <section class="mt-3">
                <h1 class="text-center mt-5 text-secondary-emphasis">Strong Password Generator</h1>
                <h2 class="text-center text-white my-4">Genera una password sicura</h2>

                <div class="password-alert">
                    <?php if (isset($is_password_valid)) : ?>

                        <!-- Alert -->
                        <?php include __DIR__ . '/includes/templates/alert.php' ?>
                        
                    <?php endif; ?>
                </div>

                <div class="card">
                    <div class="card-body bg-light rounded">
                        <form action="" method="GET" novalidate>
                            <div class="mb-3 row">
                                <div class="col-6">
                                    <label for="password-length" class="form-label text-black ms-4">
                                        Lunghezza password:
                                    </label>
                                </div>
                                <div class="col-6">
                                    <input type="number" name="password-length" id="password-length" value="<?= $password_length ?>"
                                        class="bg-white rounded text-black">
                                </div>
                            </div>
                            <button type="submit" class="bg-primary rounded py-1 px-3 ms-4 me-2">Invia</button>
                            <button type="reset" class="rounded py-1 px-3">Annulla</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>