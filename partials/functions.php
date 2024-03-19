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