<!DOCTYPE html>
<html>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter string:<input type="text" name="name"><br> <br>
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
                 
            if(strlen($input)<3){
                echo $input.$input.$input;
            }
            else{
                $char = substr($input, 0, 3);
                $new = $char.$input.$char;
                echo $new;
            }   
        }
    ?>
    </body>
</html>