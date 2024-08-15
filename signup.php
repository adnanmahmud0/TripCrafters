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
      <header>Signup Form</header>
      <div class="progress-bar">
        <div class="step">
          <p>Name</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contact</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Address</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
      <div class="form-outer">
        <form action="signup-check.php" method="post">

          <div class="page slide-page">
            <div class="title">Basic Info:</div>
            <div class="field">
              <div class="label">Full Name</div>


              <?php if (isset($_GET['name'])) { ?>
              <input type="text" 
                      name="name"
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="name" 
                          placeholder="Name"><br>
              <?php }?>



            </div>
            <div class="field">
              <div class="label">Username</div>


              <?php if (isset($_GET['user_name'])) { ?>
              <input type="text" 
                      name="user_name"
                      placeholder="Username"
                      value="<?php echo $_GET['user_name']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="user_name" 
                          placeholder="Name"><br>
              <?php }?>



            </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Contact Info:</div>
            <div class="field">
              <div class= "label">Email Address</div>


              <?php if (isset($_GET['email'])) { ?>
              <input type="text" 
                      name="email" required
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="email" 
                          placeholder="Email"><br>
              <?php }?>




            </div>
            <div class="field">
              <div class="label">Phone Number</div>


              <?php if (isset($_GET['phone'])) { ?>
              <input type="text" 
                      name="phone" required
                      placeholder="Phone"
                      value="<?php echo $_GET['name']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="phone" 
                          placeholder="Phone"><br>
              <?php }?>



            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Address:</div>
            <div class="field">
              <div class="label">Area</div>


              <?php if (isset($_GET['area'])) { ?>
              <input type="text" 
                      name="area" required
                      placeholder="Area"
                      value="<?php echo $_GET['area']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="area" 
                          placeholder="Area"><br>
              <?php }?>



            </div>
            <div class="field">
              <div class="label">Thana</div>


              <?php if (isset($_GET['thana'])) { ?>
              <input type="text"
                     name="thana" required
                      placeholder="Thana"
                      value="<?php echo $_GET['thana']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="thana" 
                          placeholder="Thana"><br>
              <?php }?>



              <div class="label" style="margin-left: 122px;">Street</div>


              <?php if (isset($_GET['street'])) { ?>
              <input type="text" 
                    name="street" required
                      placeholder="Street"
                      value="<?php echo $_GET['street']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="street" 
                          placeholder="Street"><br>
              <?php }?>



              <div class="label" style="margin-left: 235px;">Zip</div>


              <?php if (isset($_GET['zip'])) { ?>
              <input type="text" 
                      name="zip" required
                      placeholder="Zip"
                      value="<?php echo $_GET['Zip']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="zip" 
                          placeholder="Zip"><br>
              <?php }?>



            </div>
            <div class="field">
              <div class="label">Districts</div>

              <?php if (isset($_GET['districts'])) { ?>
              <input type="text" 
                      name="districts" required
                      placeholder="Districts"
                      value="<?php echo $_GET['districts']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="districts" 
                          placeholder="Districts"><br>
              <?php }?>


              <div class="label" style="margin-left: 180px;">Division</div>


              <?php if (isset($_GET['division'])) { ?>
              <input type="text" 
                      name="division" required
                      placeholder="Division"
                      value="<?php echo $_GET['division']; ?>"><br>
              <?php }else{ ?>
                  <input type="text" 
                          name="division" 
                          placeholder="Division"><br>
              <?php }?>



            </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Login Details:</div>
            <div class="field">
              <div class="label">Password</div>



              <input type="password" 
                      name="password" required
                      placeholder="Password"><br>



            </div>
            <div class="field">
              <div class="label">Confirm Password</div>



              <input type="password" 
                      name="re_pass" required
                      placeholder="Confirm Password"><br>




            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit">Submit</button>
            </div>
          </div>
        </form>
        <a href="login.php">Login</a>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
