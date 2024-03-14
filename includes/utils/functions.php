<?php 

// ! Function
function generate_password($password_length)
{
    $alfa_number = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $len_alfa_number = mb_strlen($alfa_number);


    $pass_random = '';
    $i = 0;

    while ($i < $password_length) {
        $random_index = rand(0, $len_alfa_number - 1);
        $pass_random .= $alfa_number[$random_index];
        $i++;
    }

    return $pass_random;
}

?>