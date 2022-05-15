<?php
// session_start();
include 'header.php';
require_once 'connect.php';
$sql="select * from login where user_id=".$_SESSION['id'];
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if($_SESSION['total_price']!=null)
{
    $bill=$row['Wallet']-$_SESSION['total_price'];
    if($bill>=0)
    {
?>
        <h2>Amount Payable: <?php echo $_SESSION['total_price']; ?><br>
        <form  method="post">
          <input type="button" value="Confirm Payment" onclick=
          'document.getElementById("here").innerHTML="<center><table><tr><th>Transaction Succesfull</th></tr><tr><th>Amount Debited:</th><td><?php echo $_SESSION['total_price'] ?></td></tr><tr><th>Remaining Balance: </th><td><?php echo $bill ?> </td></tr></table></center><br><br>"'>
        </form>
          <section id=here>
      </section>
        <?php
                 $mysql="UPDATE login SET Wallet='$bill' WHERE user_id= ".$_SESSION['id'];
                $result2=mysqli_query($conn,$mysql);
    }
   else
   {
    ?>
    <h3>Transaction Failed</h3>
    <?php
   }
}
?>
<?php
include 'footer.php';
?>