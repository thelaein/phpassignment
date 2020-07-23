<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="name">Name:</label>
            <input type="text" name="name"><br>
            <label for="email">Email:</label>
            <input type="text" name="email"><br>
            <label for="phone">Phone:</label>
            <input type="text" name="phone"><br>
            <label for="township">Township</label>
            <select id="ts" name="township">
                <option value="thanbyuzayat">Thanbyuzayat</option>
                <option value="mawlamying">Mawlamying</option>
                <option value="yangon">Yangon</option>
            </select> <br>
            <label for="grade">Grade</label>
            <input type="radio" name="grade" id="first" value="first">
            <label for="first">FirstYear</label>
            <input type="radio" name="grade" id="sec" value="sec">
            <label for="sec">Second</label>
            <input type="radio" name="grade" id="third" value="third">
            <label for="third">Third</label><br>
            <label for="sub">Subjects:</label>
            <input type="checkbox" name="sub" id="sub" value="501">
            <label for="sub">501</label>
            <input type="checkbox" name="sub" id="sub" value="502">
            <label for="sub">502</label>
            <input type="checkbox" name="sub" id="sub" value="503">
            <label for="sub">503</label><br>
            <input type="submit">
            </form>

            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {

             $name = $_POST['name'];
                 if (empty($name)) {
             echo "Name is empty";
                  } else {
             echo $name;
                 }
             } 
             echo "<br>";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $mail = $_POST['email'];
                     if (empty($mail)) {
                 echo "mail is empty";
                   } else {
                 echo $mail;
                     }
                 } 
                 echo "<br>";
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $phone = $_POST['phone'];
                         if (empty($phone)) {
                     echo "phoneno is empty";
                       } else {
                     echo $phone;
                         }
                     } 
                     echo "<br>";
                    $township = test_input($_POST["township"]);
                     function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                      }
                      echo $township;
                      echo "<br>"; 
                      
                      $select_radio = $_POST['grade'];
                        echo $select_radio;
                       
                      echo "<br>";
                      $select_checkbox = $_POST['sub'];
                       echo $select_checkbox;  
            
            ?>
            

          </form>      
        
    
    </body>
</html>