<?php
include("connect.php");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$role = $_POST['role'];


if($password == $cpassword){
$insert = mysqli_query($connect, "INSERT INTO user (name, mobile, password, role, status, votes) VALUES ('$name', '$mobile', '$password', '$role', 0, 0)");
 
if($insert){
    echo '
    <script>
    alert("Registration Successful!");
    window.location = "index.html"
    </script>

';
}
else{
    echo '
    <script>
    alert("Some Error Occured!");
    window.location = "register.html"
    </script>

';
}
}
else{
    echo '
        <script>
        alert("Password and Confirm password does not matched!");
        window.location = "register.html"
        </script>
    
    ';
}

?>
