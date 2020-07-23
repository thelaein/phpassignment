<!DOCTYPE HTML>
<html>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter string:<input type="text" name="name"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $input = $_REQUEST['name'];
            if (empty($input)) {
                echo "empty";
                  } else {
                echo $input;
                    }
            $char = strtoupper($input[0]);
            $new = substr_replace($input, $char, 0, 1);
            echo $new; 
        }
    ?>
    </body>
</html>