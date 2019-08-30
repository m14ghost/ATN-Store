<?php
require_once './functions.php';
require_once './header.php';
$error = $user = $pass = "";
if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    if ($user == "" || $pass == "") {
        $error = "Not all fields was entered";
    } else {
        $token = passwordToToken($pass);
        $result = queryMysql("SELECT * FROM users WHERE username = '$user' AND password = '$token' AND status='1'");
        if ($result->num_rows == 0) {
            $error = "Username/Password invalid";
        } else {
            session_start();
            $_SESSION['uId'] = mysqli_fetch_array($result)[0]; 
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header("Location: menuadmin.php"); //redirect to index.php
            die("You already log in. Please <a href='index2.php'>click here</> to continue.");
        }
    }
}
?>
<br><br>

<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter username and password</p>
   </div>
   <form method="post" action="login.php" id="Login">
   <div class="form-group">
   <fieldset class="fitContent">
        <span class="error"><?php echo $error ?></span><br>
        Username: <br>
        <input type="text"  class="form-control" name="user" value="<?php echo $user; ?>"/><br>
        Password : <br>
        <input type="password" class="form-control" name="pass" value="<?php echo $pass; ?>"/><br><br>
        <button type="submit" class="btn btn-primary"value="Login">Login</button>
    </fieldset>
   </div>
   </form>
    </div>
</div>
</div>
</div>
</body>
</html>


