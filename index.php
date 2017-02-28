<?php
$myage=18;
?>

<!DOCTYPE  html>
<html >
    <head>
    </head>
    <body>
    <p>
        <?php
            if($myage >= 21){
                echo "You can buy specs, mugs and sausage rolls.";
            }else {
                if ($myage >= 18) {
                    echo "You can buy specs and mugs, but not sausage rolls.";
                }else{
                    if ($myage >= 16) {
                        echo "You can buy specs, but not mugs and sausage rolls.";
                    }else{
                        echo "You can't buy anything.";
                    }
                }
            }
        ?>
    </p>
    <form action="formLogin.php" method="post">
        <label>Username</label><input type="text" name="username">
        <label>Password</label><input type="text" name="password">
        <input type="submit" value="Submit">
    </form>
    </body>
</html >