<?php
include('conection.php');
if (isset($_POST['userLogin'])) {
  $query = "select email, password, name, usid from users where email = '$_POST[email]' AND password = '$_POST[password]'";
  $query_run = mysqli_query($connection, $query);
  if (mysqli_num_rows($query_run)) {
    echo "<script type = 'text/javascript'>
            window.location.href = '../thenorthbengalbuzz/book.php';
            </script>";
  } else {
    echo "<script type = 'text/javascript'>
            alert('please enter correct details...');
            window.location.href = '../thenorthbengalbuzz/login.php';
            </script>";
  }
}
?>

<?php
include('conection.php');
if (isset($_POST['userRegistration'])) {
  $query = "insert into users values(null, '$_POST[name]', '$_POST[email]', '$_POST[password]', $_POST[mobile])";
  $query_run = mysqli_query($connection, $query);
  if ($query_run) {
    echo "<script type = 'text/javascript'>
            alert('user registered successfully...');
            window.location.href = '../thenorthbengalbuzz/book.php';
            </script>";
  } else {
    echo "<script type = 'text/javascript'>
            alert('Error please try again...');
            window.location.href = '../thenorthbengalbuzz/login.php';
            </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Account</title>
  <link rel="stylesheet" type="text/css" href="../thenorthbengalbuzz/css/login.css" />

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <!-- JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

  <link rel="shortcut icon" href="../thenorthbengalbuzz/images/The Northbengal Buzz.png" type="image/png" />


</head>

<body>

  <!-- Animated cursor Start -->
  <div class="cursor"></div>
  <!-- Animated cursor End -->

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" class="sign-in-form" method="POST">
          <h2 class="title">Sign In</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
          </div>
          <div class="form-group">
            <center>
              <input type="submit" name="userLogin" value="Login" class="btn solid" required>
            </center>
          </div>
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>



        <form action="" class="sign-up-form" method="POST">
          <h2 class="title">Sign Up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="input-field">
            <i class="fas fa-mobile"></i>
            <input type="text" name="mobile" class="form-control" placeholder="Mobile No." required>
          </div>
          <div class="form-group">
            <center>
              <input type="submit" name="userRegistration" value="Register" class="btn solid" required>
            </center>
          </div>
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New to our community?</h3>
          <p>Discover the heart of North Bengal with The Northbengal Buzz! Find hidden gems, culinary delights, and your perfect retreat. Let's explore together!</p>
          <button class="btn transparent" id="sign-up-btn">Sign Up</button>
        </div>
        <img src="/images/log.svg" class="image" alt="">
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>Welcome to our community!</h3>
          <p>Embark on a journey with us and explore the wonders of North Bengal.</p>
          <button class="btn transparent" id="sign-in-btn">Sign In</button>
        </div>
        <img src="/images/register.svg" class="image" alt="">
      </div>
    </div>
  </div>

  <script src="../thenorthbengalbuzz/js/login.js"></script>

</body>

</html>