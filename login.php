<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Multi Step Form | CodingNepal</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>Login Form</header>
      <div class="progress-bar">

      </div>
      <div class="form-outer">
        <form action="login-check.php" method="post">
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <div class="page slide-page">
            <div class="field">
              <div class="label">Username</div>
              <input type="text"  name="user_name" required>
            </div>
            <div class="field" >
              <div class="label" >Password</div>
              <input type="password" name="password" required>
            </div>
            <div class="field btns" style="margin-top: 10px;">
              <button class="submit">Login</button>
            </div>
            <a href="signup.php" >Signup ?</a>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
