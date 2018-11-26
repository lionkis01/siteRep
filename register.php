<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php
if(isset($_POST["register"])){
		$full_name=htmlspecialchars($_POST['full_name']);
		$email=htmlspecialchars($_POST['email']);
		$username=htmlspecialchars($_POST['username']);
		$password=htmlspecialchars($_POST['password']);
		if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){
		$query=$myPDO->query("SELECT count(*) FROM registration WHERE username='".$username."'");
		$numRows=$query->fetchColumn();
		if($numRows==0)
		{
			$PDO="INSERT INTO registration
			(fullName,email,username,password)
			VALUES('$full_name','$email','$username','$password')";
			$result=$myPDO->query($PDO);
			if($result)
			{
			$message="Account Successfully Created";
			echo $message;
			}
			else
			{
			$message="Failed to insert data information!";
			echo $message;
			}
		}
		else
		{
	    $message="That username already exists! Please try another one!";
	    echo $message;
		}

}
}

?>
<body>
<div class="container mregister">
    <div id="login">
        <form action="register.php" id="registerform" method="post" name="registerform">
            <p><label for="user_login">Full Name<br>
                    <input class="input" id="full_name" name="full_name" size="32" type="text" value=""></label></p>
            <p><label for="user_pass">E-mail<br>
                    <input class="input" id="email" name="email" size="32" type="email" value=""></label></p>
            <p><label for="user_pass">Login<br>
                    <input class="input" id="username" name="username" size="20" type="text" value=""></label></p>
            <p><label for="user_pass">Password<br>
                    <input class="input" id="password" name="password" size="32" type="password" value=""></label></p>
            <p class="submit"><input class="button" id="register" name="register" type="submit"
                                     value="Register"></p>
            <p class="regtext">Already have an account?<a href="login.php">Login here</a>!</p>
        </form>
    </div>
</div>
</body>
</html>