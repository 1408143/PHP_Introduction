<?php
$myage=18;
?>

<!DOCTYPE  html>
<html >
<head>
</head>
<body>
<p><a href="http://phpintro.azurewebsites.net/helloPrinter.php?query=Earth">Earth</a></p>
<p><a href="http://phpintro.azurewebsites.net/helloPrinter.php?query=Mars">Mars</a></p>
<p><a href="http://phpintro.azurewebsites.net/helloPrinter.php?query=Uranus">Uranus</a></p>

    <form action="formResponse.php" method="post">
        <label>First Name</label><input type="text" name="firstname">
        <label>Last Name</label><input type="text" name="lastname">
        <label>Gender</label><input type="text" name="gender">
        <label>Main Power</label><input type="text" name="power">
        <input type="submit" value="Submit">
    </form>
</body>
</html >