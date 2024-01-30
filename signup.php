<?php
include 'config.php';
include 'index.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>
<body>
<h1>Signup</h1>
    <p>Please fill this form to create an account</p>
       <form action="insert.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form><br>
      <p>Already have an account ? <span><a href="login.php" style="text-decoration: none">Login Here.</a></span> </p>

</body>
</html>