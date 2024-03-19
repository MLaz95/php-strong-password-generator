<?php

function generatePassWord($length, $letters = null, $numbers = null, $symbols = null, $norepeat = null)
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
    $i = 0;
    while ($i < $length) {
        
        // randomly picks between letter, symbol, number for each character
        switch ($valid_parameters[random_int(0, count($valid_parameters) - 1)]) {
            case 'letters':
                $random_letter = $seed_letters[random_int(0, $seed_letters_length - 1)];

                if(isset($norepeat)){
                    if(!str_contains($random_string, $random_letter)){
                        $random_string .= $random_letter;
                        $i++;
                        break;
                    }else{
                        break;
                    }
                }else{
                    $random_string .= $random_letter;
                    $i++;
                    break;
                }
                
            case 'symbols':
                $random_symbol = $seed_symbols[random_int(0, $seed_symbols_length - 1)];

                if(isset($norepeat)){
                    if(!str_contains($random_string, $random_symbol)){
                        $random_string .= $random_symbol;
                        $i++;
                        break;
                    }else{
                        break;
                    }
                }else{
                    $random_string .= $random_symbol;
                    $i++;
                    break;
                }

            case 'numbers':
                $random_number = random_int(0, 9);
                if(isset($norepeat)){
                    if(!str_contains($random_string, $random_number)){
                        $random_string .= $random_number;
                        $i++;
                        break;
                    }else{
                        break;
                    }
                }else{
                    $random_string .= $random_number;
                    $i++;
                    break;
                }
        }
    }

    return $random_string;
}