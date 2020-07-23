<!DOCTYPE html>
<html>
    <body>
    <table width="250px" border="1">
        <?php
        for($row=1;$row<=8;$row++)
        {
            echo "<tr>";
            for($col=1;$col<=8;$col++)
            {
            $result=$row+$col;
            if($result%2==0)
            {
            echo "<td height=20px width=20px bgcolor=#FFFFFF></td>";
            }
            else
            {
            echo "<td height=20px width=20px bgcolor=#000000></td>";
            }
            }
            echo "</tr>";
      }
            
        ?>
    </body>
</html>