<?php
include"include/connection.php";

if(isset($_POST["submit"]))
{
    $email=$_POST['username'];
    $pwd=$_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `admin_email` = '".$email."' and `admin_password` = '".$pwd."'";
    $query=mysqli_query($conn,$sql);

    echo"query runned";

    $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
    echo $row['admin_email'];
    echo $row['admin_password'];

    $numrows=mysqli_num_rows($query);

    echo"<br>";
    echo$numrows;
    if($numrows > 0)
    {
        session_start();
        $_SESSION['username']=$_POST['username'];
        header('location:admin.php');
    }
    else
    {
        header('location:login.php');
    }
}
?>