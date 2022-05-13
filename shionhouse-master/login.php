<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database="ecomproject";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
die("Connection Failed: ".$conn->connect_error);
}
echo "Connected successfully";
$user=$_POST['Uname'];
$pass=$_POST['Upassword'];
$sql="SELECT * FROM login where UserName='$user' and UPassword='$pass'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
 $count = mysqli_num_rows($result);
     
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         
         $_SESSION['id']=$row['user_id'];
		 $_SESSION['username']=$row['FirstName'];
         header("location: index.php");
      }else{

    $message = 'Wrong Email or Password';

    echo "<SCRIPT>
        alert('$message')
        window.location.replace('login_design.php');
    </SCRIPT>";
    mysql_close();
}
?>