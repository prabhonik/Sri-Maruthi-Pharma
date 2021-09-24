<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<header>
        <nav>
            <a href="#" id="maruti"><b>MARUTHI PHARMA</b></a>
            <ul  style="list-style-type: none;" id="menu"><b></b>
                <li><a href="index.html"><b>HOME</b></a></li>
                    <li><a href="contact.html"><b>CONTACT</b></a></li>
                         <li><a href="about.html"><b>ABOUT</b></a></li>
                             <li><a href="admin.php"><b>ADMIN</b></a></li>
            </ul>
            <div id="random">
                <div class="line" id="one"></div>
                    <div class="line" id="two"></div>
                        <div class="line" id="three"></div>
            </div>
        </nav>

        <div class="mobile-menu">
            <ul style="list-style-type: none;" class="mobile-menu-items">
                <li><b><a href="index.html">HOME</a></b></li>
                    <li><b><a href="contact.html">CONTACT</a></b></li>
                         <li><b><a href="about.html">ABOUT</a></b></li>
                            <li><b><a href="admin.php">ADMIN</a></b></li>
            </ul>
        </div>
    </header>
<section>
	<div class="main">
		<div class="logo"></div>
		<div class="title">ADMIN LOGIN</div>
		<form action="login.php" method="POST">
		<div class="credentials">
			<div class="username">
				<span class="glyphicon glyphicon-user"></span>
				<input type="text" name="usernamelog" placeholder="Username" required="" >
			</div>
			<div class="password">
				<span class="glyphicon glyphicon-lock"></span>
				<input type="password" name="passwordlog" placeholder="Password" required="">
			</div>
		</div>
		<button class="submit" value="submit">Submit</button>
		</form>
	</div>
</section>
<script>
	document.getElementById("random").addEventListener("click",function(){
		this.classList.toggle("active");
		document.querySelector(".mobile-menu").classList.toggle("active");
	})
</script>
<?php
    if(isset($_GET['msg']) && $_GET['msg']=='fail'){
    echo "<script>alert('Please retry with Correct Username and Password');</script>";
    }
?>
</body>
</html>
