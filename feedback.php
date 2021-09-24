<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feed.css">
    <title>Feedback submission?</title>
</head>
<body>
    <header>
        <nav>
            <a style="text-decoration:none;" href="#" id="maruti"><b>MARUTHI PHARMA</b></a>
            <ul style="list-style-type: none;" id="menu"><b></b>
                <li><a style="text-decoration:none;" href="index.html"><b>HOME</b></a></li>
                    <li><a style="text-decoration:none;" href="contact.html"><b>CONTACT</b></a></li>
                         <li><a style="text-decoration:none;" href="about.html"><b>ABOUT</b></a></li>
                             <li><a style="text-decoration:none;" href="admin.php"><b>ADMIN</b></a></li>
            </ul>
            <div id="random">
                <div class="line" id="one"></div>
                    <div class="line" id="two"></div>
                        <div class="line" id="three"></div>
            </div>
        </nav>

        <div class="mobile-menu">
            <ul style="list-style-type: none;" class="mobile-menu-items">
                <li><b><a style="text-decoration:none;" href="index.html">HOME</a></b></li>
                    <li><b><a style="text-decoration:none;" href="contact.html">CONTACT</a></b></li>
                         <li><b><a style="text-decoration:none;" href="about.html">ABOUT</a></b></li>
                            <li><b><a style="text-decoration:none;" href="admin.php">ADMIN</a></b></li>
            </ul>
        </div>
    </header>

<script>
        document.getElementById("random").addEventListener("click",function(){
            this.classList.toggle("active");
            document.querySelector(".mobile-menu").classList.toggle("active");
        })
    </script>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
  
    $conn = mysqli_connect("localhost","root","","maruthipharma");
    
    if(isset($_POST['submit'])){
        if(!empty($name) && !empty($email) && !empty($mobile) && !empty($message) ){
            $query = "INSERT INTO feedback(name,email,mobile,message) VALUES ('$name','$email','$mobile','$message')";
            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if($run){
                echo "<div class='sucesspic'>
                    <img src='images/success.png' alt='sucess' class='pic'>
                </div>";
                echo "<div class='phpecho'> Feedback Submitted Successfully<br>Thankyou for your valuable feedback!</div>";
            }
            else{
                echo"<div class='sucesspic'>
                    <img src='images/sorry.png' alt='fail' class='pic'>
                    </div>";
                echo "<div class='phpechofail'>Failed!</div>";
            }
        }
        else{
            echo"<div class='sucesspic'>
                    <img src='images/sorry.png' alt='fail' class='pic'>
                    </div>";
            echo "<div class='phpechofail'> All fields required</div>";
        }
    }
?>
</body>
</html>



