<!DOCTYPE html>
<html>
<body>


<?php 

    
    $fname = $_GET['fname'];
    

    if($fname == "" ){
        echo "null ";
    }else{
        
        header('location: test.php?msg=invalid');
    }
?>

<head>
  <style>
fieldset {
      height: 50%;
      width: 20%;
      
    }

    </style>

</head>


<form method="get" action="test.php" enctype=""> 
  
<fieldset>
  <legend><h1>Name</h1></legend>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" value="Submit">
 </fieldset>

 </form>


 </body>
</html>