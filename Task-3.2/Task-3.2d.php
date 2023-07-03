<!DOCTYPE html>
<html>
<body>

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
  <legend><h1>Gender</h1></legend>
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="Other">
  <label for="other">Other</label><br><br>
  <input type="submit" value="Submit">
 </fieldset>

 </form>


 </body>
</html>