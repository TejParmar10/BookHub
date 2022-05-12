<?php
 include 'header.php';
?>
<html>
<style >
.category-area container row card card-body card-action {
        align-self: flex-end;
        flex: 1 1 auto;
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
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">comis</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <!-- listing Area Start -->
        <div class="category-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-50">
                            <h2>Shop with us</h2>
                            <p>comics</p>  
                        </div>
                    </div>
                </div>
                </div>
                
                    <div class="container py-5">
                            <div class="row mt-4">
                            <?php
                           
                           include 'connect.php';
                            $query = "select * from productdb WHERE type='comics'";
                            $query_run=mysqli_query($conn,$query);
                            $check_books=mysqli_num_rows($query_run)>0;
                            if($check_books)
                            {
                                while($row=mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <div class="col-md-4 mt-2">
                                        <div class="card"  style=" height: 51rem;" >
                                            
                                         <?php echo '<center><img src="data:image/jpg;base64,'.base64_encode( $row['product_image'] ).'"alt="gym images" style="width:300px; height:350px;">';?>
                                         <div class="card-body d-flex flex-column ">
                                        
                                            <h2 class="card-title"><?php echo $row['product_name'];?></h2>
                                           
                                        <h4 class="card-title"><?php echo "Rs.".$row['product_price'];?></h4>
<p>
<a class="brand-text " href="books_detail.php?id=<?php echo $row['id']?>"  style="color:#f44242 ;align-content: flex-end;" >View Details</a>
 </p>                                          
                                         </div>
                                        </div>
                                    </div>  
                        
                            <?php 
                                }
                            }
                            else{
                                echo 'No results';
                            }
                            ?>
                          </div>
                    </div>


                    </div>

<!-- listing-area Area End -->
</main>
<?php
include 'footer.php';
?>