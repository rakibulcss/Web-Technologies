<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>HTML FORM</title>
</head>
<body>
   <form action="" method="post">
    <fieldset>
  
        <legend>
            Name " <?php
     if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        echo "$name";
    }
    ?>"
     </legend>
 
     <input type="text" name="name" value=""><hr><br>
     
     <input type="submit" name="submit" value="submit">
   
    
    </fieldset>
    
   </form>
   
   
   
</body>
</html>