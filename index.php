<?php

// ! Function
function generate_password($password_length)
{
    $alfa_number = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $len_alfa_number = strlen($alfa_number);


    $pass_random = '';
    $i = 0;

    while ($i < $password_length) {
        $random_number = rand(0, $len_alfa_number - 1);
        $pass_random .= $alfa_number[$random_number];
        $i++;
    }

    return $pass_random;
}

// Get sent data
$password_length = $_GET['password-length'] ?? '';

if($password_length) {
    $is_password_valid = generate_password($password_length);
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body class="bg-primary-subtle">
    <div class="container mt-3">
        <main>
            <section class="mt-3">
                <h1 class="text-center mt-5 text-secondary-emphasis">Strong Password Generator</h1>
                <h2 class="text-center text-white my-4">Genera una password sicura</h2>

                <div>
                    <?php if(isset($is_password_valid)) : ?>
                        <div class="alert alert-info ps-4" role="alert">
                            La tua password è: <strong><?= generate_password($password_length) ?></strong>
                        </div>
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