<?php
function random_char($string) {
    $i = mt_rand(0, strlen($string)-1);
    return $string[$i];
}

function random_string($length, $char_set) {
    $output = '';
    for($i=0; $i < $length; $i++) {
        $output .= random_char($char_set);
    }
    return $output;
}

function generate($options) {
    $lower = 'abcdefghijklmnopqrstuvwxyz';
    $upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&&*()_+=-';

    $use_lower = isset($options['lower']) ? $options['lower'] : '0';
    $use_upper = isset($options['upper']) ? $options['upper'] : '0';;
    $use_numbers = isset($options['numbers']) ? $options['numbers'] : '0';;
    $use_symbols = isset($options['symbols']) ? $options['symbols'] : '0';;

    $chars = '';
    if($use_lower == '1') { $chars .= $lower; }
    if($use_upper == '1') { $chars .= $upper; }
    if($use_numbers == '1') { $chars .= $numbers; }
    if($use_symbols == '1') { $chars .= $symbols; }

    $length = isset($options['length']) ? $options['length'] : 8;

    return random_string($length, $chars);
}

$options = array(
    'length' => $_POST['length'],
    'lower' => $_POST['lower'],
    'upper' => $_POST['upper'],
    'numbers' => $_POST['numbers'],
    'symbols' => $_POST['symbols']
);

$password = generate($options);


?>

