<?php

function generatePassWord($length)
{
    // possible letters and symbols that can end up in the pw, we don't need a variable for numbers because of random_int
    $seed_letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $seed_letters_length = strlen($seed_letters);
    $seed_symbols = '!@#$%^&*()';
    $seed_symbols_length = strlen($seed_symbols);
    // variable for our output
    $random_string = '';

    // i tied to pw length chosen by user
    for ($i = 0; $i < $length; $i++) {
        // randomly picks between letter, symbol, number for each character
        switch (random_int(1, 3)) {
            case 1:
                $random_letter = $seed_letters[random_int(0, $seed_letters_length - 1)];
                $random_string .= $random_letter;
                break;
            case 2:
                $random_symbol = $seed_symbols[random_int(0, $seed_symbols_length - 1)];
                $random_string .= $random_symbol;
                break;
            case 3:
                $random_string .= random_int(0, 9);
                break;
        }
    }

    return $random_string;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">

    <div class="container vh-100 d-flex flex-column align-items-center justify-content-center">
        <form action="">
            <label for="pw-length">How long should your password be?</label>
            <input type="number" name="pw-length" id="pw-length">
            <button type="submit" class="btn btn-outline-light">Confirm</button>
        </form>
    
        <div>
            Your new password is: 
            <?php
                if(isset($_GET['pw-length'])){
                    echo generatePassWord($_GET['pw-length']);
                }
            ?>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>