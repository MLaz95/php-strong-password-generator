<?php

function generatePassWord($length, $letters = null, $numbers = null, $symbols = null,)
{
    // possible letters and symbols that can end up in the pw, we don't need a variable for numbers because of random_int
    $seed_letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $seed_letters_length = strlen($seed_letters);
    $seed_symbols = '!@#$%^&*()';
    $seed_symbols_length = strlen($seed_symbols);
    // variable for our output
    $random_string = '';
    
    $valid_parameters = [];

    if(isset($letters)){
        array_push($valid_parameters, 'letters');
    }

    if(isset($numbers)){
        array_push($valid_parameters, 'numbers');
    }

    if(isset($symbols)){
        array_push($valid_parameters, 'symbols');
    }
    
    // i tied to pw length chosen by user
    for ($i = 0; $i < $length; $i++) {
        
        // randomly picks between letter, symbol, number for each character
        switch ($valid_parameters[random_int(0, count($valid_parameters) - 1)]) {
            case 'letters':
                $random_letter = $seed_letters[random_int(0, $seed_letters_length - 1)];
                $random_string .= $random_letter;
                break;
            case 'symbols':
                $random_symbol = $seed_symbols[random_int(0, $seed_symbols_length - 1)];
                $random_string .= $random_symbol;
                break;
            case 'numbers':
                $random_string .= random_int(0, 9);
                break;
        }
    }

    return $random_string;
}