<?php 
$error=''; 
if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        $error = "Username or Password is Invalid!";
    } else {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        $conn = mysqli_connect("localhost", "root". "");
        $db = mysqli_select_db($conn, "lintasarta");
        $query = mysqli_query($conn, "select * from users where username='$user' and password='$pass'");

        $row = mysqli_num_rows($query);
        if($row == 1){
            header("Location: home.php");
        } else {
            $error = "Username or Password is Invalid!";
        }
        mysqli_close($conn);
        }
    }
?>