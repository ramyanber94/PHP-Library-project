<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>Login Page</title>
<link rel="stylesheet" href="styles/Login.css">



<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="src/Logo.jpg" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form action="loginprocess.php" method="GET">
        <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
        <div class="container">
          <a style="margin-bottom:6%;" href="CreateNewUser.php" class="btn btn-primary"> Create new User </a>
        </div>
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>
</body>

</html>