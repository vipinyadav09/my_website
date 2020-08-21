<!DOCTYPE html>
<html>
<head>
  <style>
.logindiv{
  /*border: 5px outset red;
  background-color: lightblue;
  text-align: center;
  height: 150px;
  width: 30%;
display: block;
  text-align: center;*/
  margin: auto;
width: 40%;
border: 3px solid #73AD21;
padding: 10px;
display: block;
  text-align: center;
}
  </style>
<title>Form</title>
</head>
<body>
    <?php include 'header.php'?>
  <div class="logindiv">
<form action="/test/form.php" method="post">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username"><br><br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" id="password"><br><br>
      <input type="submit"  value="Login" formaction="/test/home.php">
</form>
</div>
<?php include 'footer.php'  ?>
</body>
</html>
