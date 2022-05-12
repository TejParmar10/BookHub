<?php 
 include 'connect.php';
 if(isset($_GET['id'])){
  $id=mysqli_real_escape_string($conn,$_GET['id']);

  $sql="select * from productdb where id=$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  mysqli_close($conn);
 }

?>
<?php
include 'header.php'; 
?>
<html>
<style>
  .grid-container {
    display: grid;
    grid-template-columns: 430px 1fr;
    grid-gap: 5px;
}
  .grid-container2 {
    display: grid;
    grid-template-columns:550px 200px;
    grid-gap: 5px;
}
#grid-container2 form input{
  background-color: white;
  border: none;
  color: #f44245;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.outer{
    position: relative;

}
.outer img,.inner img{
    width: 100%;
}
.inner{
    position: absolute;
    top: 0px;
    display: none ;   

}
.outer:hover .inner{
    display: block;
}
</style>
<body>
  <main>
        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="trial.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop.php">Books</a></li> 
                                <li class="breadcrumb-item"><a href=""><?php echo $row['product_name'];?></a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
<div class="grid-container">

    <div class="grid-child purple">
       <div class="outer">
        <?php echo '<img src="data:image/jpg;base64,'.base64_encode( $row['product_image'] ).'"alt="backpack images" style="width:320px; height:350px;"/>';?>
    
    </div>
    </div>

    <div class="grid-child green">
          <h1 class="card-title"><?php echo $row['product_name'];?></h1>
<p class="card-text">
<p><?php echo $row['description'];?></p>

</p>
<h3 class="card-title"><?php echo "Rs.".$row['product_price'];?></h3><br><br>
<div class="grid-container2">

    <div class="grid-child purple">
           <form action ="shopping_cart.php?action=add&id=<?php echo $row['id'];?>" method="post">
            Quantity:<input type="text" name="quantity" value="1" size="2">
          
    </div>

    <div class="grid-child green">
        
        <input type="submit" value="Add to Cart" style="color: #f44245; background-color: white; ">
    </div>
        
  
</div>

</div>
  
</div>
     
 <br>
 <br>
 <br>
 <br>
 <br>


<!-- listing-area Area End -->
<?php
 include 'footer.php';
?>
</body>
</html>
