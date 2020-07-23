<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Enter string:<input type="text" name="name"><br>
            Enter character:<input type="number" name="del"><br>
            <input type="submit" value="Submit" name="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $input = $_REQUEST['name'];
                $del = $_REQUEST['del'];
                $new = substr_replace($input, "", $del, 1);
                echo $new;
            }
        ?>
    </body>
</html>