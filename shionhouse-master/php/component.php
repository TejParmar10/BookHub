<?php
function component($productname,$productprice,$productimage){
    $element='
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-new-arrival mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="$productimage"  alt="image8" class="img-fluid card-img-top">
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details.html">$productname/a></h3>
                                        <div class="rating mb-10">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <small><s><i class="fas fa-rupee-sign"></i> 200.00</s></small>
                                                <span><i class="fas fa-rupee-sign"></i>$productprice</span>
                                                <button type="submit" name="Add"style="background-color:#9F78FF;" class="btn ">Add to cart<i class="fas fa-shopping-cart"></i></button>
                                        
                                    </div>
                                </div>
                            </div>';
                            echo $element;
}
?>  