<?php include 'controlPassword.php';?>
<?php include 'validation.php';?>

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

<body>


<h1>Diego's Password Generator Project 2</h1>

<img src="img/images.jpeg" alt="Mountain View" style="width:304px;height:228px;">


<form action=" " method="post">

    Name: <input type="text" name="name" required><span class="error"><?php echo $nameErr;?></span>
    <br><br>

    Lastname: <input type="text" name="lastname" required><span class="error"><?php echo $lastnameErr;?></span>
    <br><br>

    E-mail: <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><span class="error"><?php echo $emailErr;?></span>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error"><?php echo $genderErr;?></span>
    <br><br>

    Length: <input type="text" name="length" value="<?php if(isset($_POST['length'])) { echo $_POST['length']; } ?>" /><br />
    <br />
    <input type="checkbox" name="lower" value="1" <?php if($_POST['lower'] == 1) { echo 'checked'; } ?> /> Lowercase<br />
    <input type="checkbox" name="upper" value="1" <?php if($_POST['upper'] == 1) { echo 'checked'; } ?> /> Uppercase<br />
    <input type="checkbox" name="numbers" value="1" <?php if($_POST['numbers'] == 1) { echo 'checked'; } ?> /> Numbers<br />
    <input type="checkbox" name="symbols" value="1" <?php if($_POST['symbols'] == 1) { echo 'checked'; } ?> /> Symbols<br />

    <input type="submit" value="Submit" id= "submit"/>

</form>



<p id = "password">Generated Password: <?php echo $password; ?></p>

</body>


</body>







</body>
</html>