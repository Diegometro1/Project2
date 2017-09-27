<?php
require('formClass.php');
$form = new Forma\Form($_GET);
if ($form->isSubmitted()) {
    $errors = $form->validate(
        [

            'username' => 'alphaNumeric',
            'lastname' => 'alphaNumeric',
            'email' => 'required|email',
            'gender' =>'required',
            'rank' => 'numeric|min:0|max:40',
        ]
    );
}