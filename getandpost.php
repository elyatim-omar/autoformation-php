<?php
if(isset($_POST['name'],$_POST['age'])){
   $name = $_POST['name'];
   $age = $_POST['age'];
   echo "you are {$name} and you are {$age} years old";
}
 
?>

      <form action = "getandpost.php" method = "post">
         Name: <input type = "text" name = "name" >
         Age: <input type = "text" name = "age" >
         <input type = "submit" >
      </form>
      
 