<?php session_start();  ?>
<?php require_once("includes/connection.php") ?>
<?php include("includes/header.php") ?>
<?php
if(isset($_SESSION["session_username"])){
	header("Location : intropage.php");
}
if(isset($_POST["login"])){
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	if(!empty($username) && !empty($password)) {
	$query=$myPDO->query("SELECT count(*) FROM registration WHERE username='".$username."' AND password='".$password."'");
	$numRows=$query->fetchColumn();
	if($numRows!=0)         //$row=$query->fetchAll(PDO::FETCH_ASSOC)
 {
	$users=$query->fetchAll(PDO::FETCH_ASSOC);
    
  if($users=$username) 
 {
	 $_SESSION['session_username']=$username;
	 header("Location: intropage.php");
 }
}else{
echo "Invalid username or password!";
}
}else{
echo "All fields are required!";
}
}
?>
<body>
<div class="container mlogin">
    <div id="login">
        <form action="" id="loginform" method="post" name="loginform">
            <p><label for="user_login">Login<br>
                    <input class="input" id="username" name="username" size="20"
                           type="text" value=""></label></p>
            <p><label for="user_pass">Password<br>
                    <input class="input" id="password" name="password" size="20"
                           type="password" value=""></label></p>
            <p class="submit"><input class="button" name="login" type="submit" value="Log In"></p>
            <p class="regtext">No account yet?<a href="register.php">Register here</a>!</p>
        </form>
    </div>
</div>
</body>
</html>