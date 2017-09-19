<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Generator</title>
    <link rel="stylesheet" type="text/css" href="css/project.css">
</head>
<body>

<h1>Probando conection</h1>

<p>Diego's Password Generator Project 2</p>

<img src="images/images.jpeg" alt="Mountain View" style="width:304px;height:228px;">

<form action=" " method="post">

    Name: <input type="text" name="name" required><span class="error"></span>
    <br><br>

    Lastname: <input type="text" name="lastname" required><span class="error"></span>
    <br><br>

    E-mail: <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><span class="error"></span>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error"></span>
    <br><br>

    Length: <input type="text" name="length" value="" /><br />
    <br />
    <input type="checkbox" name="lower" value="1" /> Lowercase<br />
    <input type="checkbox" name="upper" value="1"  /> Uppercase<br />
    <input type="checkbox" name="numbers" value="1" /> Numbers<br />
    <input type="checkbox" name="symbols" value="1" /> Symbols<br />

    <input type="submit" value="Submit" id= "submit"/>

</form>



<p id = "password">Generated Password: </p>

</body>







</body>
</html>