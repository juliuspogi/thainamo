<!DOCTYPE html>
<html>

<head>
     <title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
     <form action="signup-check.php" method="post">
          <h2>SIGN UP</h2>
          <?php
          if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>



          <label>Username</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" name="uname" placeholder="Username" value="<?php echo $_GET['uname']; ?>"><br>
          <?php } else { ?>
               <input type="text" name="uname" placeholder="Username"><br>
          <?php } ?>


          <label>Password</label>
          <input type="text" name="password" placeholder="Password"><br>

          <label>Confirm Password</label>
          <input type="text" name="re_password" placeholder="Confirm Password"><br>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
          <?php } else { ?>
               <input type="text" name="email" placeholder="Email"><br>
          <?php } ?>


          <button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>

</html>