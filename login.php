
   
<?php
    $email = $_POST['usernamelog'];
    $password = $_POST['passwordlog'];

    $conn = new mysqli("localhost","root","","maruthipharma");

    if($conn->connect_error){
        die("Failed to fetch data from database: ".$conn->connect_error);
    }
    else{
        $query = $conn->prepare("select * from admin where username = ?");
        $query->bind_param("s",$email);
        $query->execute();
        $query_result = $query -> get_result();
        if($query_result->num_rows>0){
            $data = $query_result->fetch_assoc();
            if($data['password'] == $password){
                header("location:dataview.php?msg=done");
            }
            else{
                header("location:admin.php?msg=fail");
            }
        }
        else{
            header("location:admin.php?msg=fail");
        }
    }
?>




