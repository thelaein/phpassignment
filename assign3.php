<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Enter string:<input type="text" name="name"><br>
            <input type="submit" value="Submit" name="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $input = $_REQUEST['name'];
                $exchange = strlen($input)-1;
                $fchar = $input[0];
                $lchar = $input[$exchange];
                $new = substr_replace($input, $fchar, $exchange, 1);
                $new = substr_replace($new, $lchar, 0, 1);
                echo $new;
            }
        ?>
    </body>
</html>