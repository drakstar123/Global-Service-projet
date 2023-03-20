<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div id="menu">
    <a href="Marjane.html"><i class="fa fa-home"></i></a> 
    <a href="About.html">About</a>
    <a href="Services.html">Services</a>
    <a href="Login.html">Login</a>
    <a href="https://www.marjane.ma/contenu/foire-aux-questions" target="_blank">Contact</a>
    </div>


    <div class="center">
      <h1>Login</h1>
      <form method="post" action="login.php">
        <div class="txt_field">
          <input type="email" name="Email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="Password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass"> 
          
        <?php if (isset($_GET['error'])) { ?>

            <p style="background: -webkit-linear-gradient(red, #38495a); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
              <?php echo $_GET['error'];
               ?>     
            </p>

        <?php } ?>
          <br>
         Forgot Password?
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="Signup.html">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
