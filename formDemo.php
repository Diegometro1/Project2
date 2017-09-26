<?php
require('formDemoLogic.php');
include('controlPassword.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/project.css">
</head>
<body>


<h1>Diego's Password Generator Project 2</h1>
<img src="img/images.jpeg" alt="Mountain View" style="width:304px;height:228px;">

<form method = 'post'>


    <label for='username'>Username (alphaNumeric)</label>
    <input type='text' name='username' id='username' value='<?=$form->prefill('username', 'Diego')?>'>

    <label for='lastname'>Lastname (alphaNumeric)</label>
    <input type='text' name='lastname' id='lastname' value='<?=$form->prefill('lastname', 'Acosta')?>'>

    <label for='email'>Email (required|email)</label>
    <input type='text' name='email' id='email' value='<?=$form->prefill('email', 'diegometro1@hotmail.com')?>'>


    <br><br>

    Gender:
    <input type='radio' name='gender' id="gender" value='<?=$form->prefill('gender')?>'checked>Female
    <input type='radio' name='gender' id="gender" value='<?=$form->prefill('gender')?>'>Male

    <br><br>

    <label for='length'>Length (numeric|min:0|max:40)</label>
    <input type='number' name='length' value='<?=$form->prefill('rank', '39')?>'>


    <br />
    <input type="checkbox" name="lower" value="1" <?php if($_POST['lower'] == 1) { echo 'checked'; } ?> /> Lowercase<br />
    <input type="checkbox" name="upper" value="1" <?php if($_POST['upper'] == 1) { echo 'checked'; } ?> /> Uppercase<br />
    <input type="checkbox" name="numbers" value="1" <?php if($_POST['numbers'] == 1) { echo 'checked'; } ?> /> Numbers<br />
    <input type="checkbox" name="symbols" value="1" <?php if($_POST['symbols'] == 1) { echo 'checked'; } ?> /> Symbols<br />

    <input type="submit" class = 'btn' value="Submit" id= "submit"/>




    <?php if ($_POST) : ?>
        <div class="alert <?=$alertType?>" role="alert">
            <?=$results?>
        </div>
    <?php endif; ?>

    <?php if (isset($errors)) :?>
        <div class='alert alert-danger'>
            <ul>
                <?php foreach ($errors as $error) :?>
                    <li><?=$error?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>


</form>

<p id = "password">Generated Password: <?php echo $password; ?></p>



</body>