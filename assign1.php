<!DOCTYPE html>
<html>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter string:<input type="text" name="string"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $input = $_REQUEST['string'];
            $lastchar = $input[strlen($input)-1];
            echo "Inpupt string is \"$input\".";
            echo "<br>";
            echo "Last character is $lastchar.";
            echo "<br>";
            $newstr = $lastchar.$input.$lastchar;
            echo $newstr;
        }
    ?>
    </body>
</html>