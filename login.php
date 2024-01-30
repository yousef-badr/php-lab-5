<?php
include 'config.php';
include 'index.html';
mysqli_select_db( $conn,$dbname );
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputUsername = sanitizeInput($_POST["username"]);
    $inputPassword = sanitizeInput($_POST["password"]);

    $sql = "SELECT * FROM users WHERE username = '$inputUsername' AND password = '$inputPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION["username"] = $inputUsername;
        header("Location: index.php"); 
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <p>Please fill in your credentials to login</p>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <input type="submit" value="Login" class="btn btn-primary">
      </form><br>
      <p>Don't have an account ? <span><a href="signup.php" style="text-decoration: none">Signup Now.</a></span> </p>
</body>
</html>

