<fieldset>
      <form method="POST" action="../controller/regCheck.php" enctype="multipart/form-data">
      <h1>Registration Form</h1>
      <td><label>Username: </label></td></br>
      <input type="text" name="name" placeholder="enter username" class="box" required></br></br>
      <td><label>Email: </label></td></br>
      <input type="email" name="email" placeholder="enter email" class="box" required></br></br>
      <td><label>Password: </label></td></br>
      <input type="password" name="password" placeholder="enter password" class="box" required></br></br>
      <td><label>Confirm Password: </label></td></br>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required></br></br>
      <td><label>Choose Profile Picture: </label></td></br>
      <input type="file" name="image" class="box" placeholder="profile picture" accept="image/jpg, image/jpeg, image/png"></br></br>
      <input type="submit" name="submit" value="Submit" class="btn"></br></br>
      <p>already have an account? <a href="login.php">login now</a></p>
</fieldset>
<?php include_once 'extraSection.php';?>
<?php include_once 'footer.php';?>