<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/CreateNewUser.css">
  <title>Document</title>
</head>


<body>
  <form action="process.php" method="POST">
    <label>
      <p class="label-txt">ENTER YOUR EMAIL</p>
      <input type="text" class="input" name="email" id="email">
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>
    <label>
      <p class="label-txt">ENTER YOUR NAME</p>
      <input type="text" class="input" name="customer_Name" id="customer_Name">
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>
    <label>
      <p class="label-txt">ENTER YOUR PASSWORD</p>
      <input type="text" class="input" name="passoward" id="passoward">
      <div class="line-box">
        <div class="line"></div>
      </div>
    </label>
    <button type="submit" value="Sumbit">submit</button>
  </form>
</body>