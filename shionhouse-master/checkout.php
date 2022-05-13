

<?php
session_start();
include 'header.php';
require_once 'connect.php';
$sql="select * from login where user_id=".$_SESSION['id'];
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if($_SESSION['total_price']!=null){
    $wallet_amount=$row['Wallet']-$_SESSION['total_price'];
    echo $wallet_amount;


}
include 'footer.php';
?>
