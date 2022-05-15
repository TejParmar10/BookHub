<?php
// session_start();
require_once 'connect.php';

// add, remove, empty
if (!empty($_GET['action'])) {
    switch ($_GET['action']) {
        // add product to cart
        case 'add':
            if (!empty($_POST['quantity'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM productdb WHERE id='$id'" ;
                $result = mysqli_query($conn, $query);
                while ($product = mysqli_fetch_array($result)) {
                    $itemArray = [
                        $product['id'] => [
                            'name' => $product['product_name'],
                            'id' => $product['id'],
                            'quantity' => $_POST['quantity'],
                            'price' => $product['product_price'],
                            'image' => $product['product_image']
                        ]
                    ];
                    if (isset($_SESSION['cart_item']) &&!empty($_SESSION['cart_item'])) {
                        if (in_array($product['id'], array_keys($_SESSION['cart_item']))) {
                            foreach ($_SESSION['cart_item'] as $key => $value) {
                                if ($product['id'] == $key) {
                                    if (empty($_SESSION['cart_item'][$key]["quantity"])) {
                                        $_SESSION['cart_item'][$key]['quantity'] = 0;
                                    }
                                    $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
                                }
                            }
                        } else {
                            $_SESSION['cart_item'] += $itemArray;
                        }
                    } else {
                        $_SESSION['cart_item'] = $itemArray;
                    }
                }
            }
            break;
        case 'remove':
            if (!empty($_SESSION['cart_item'])) {
                foreach ($_SESSION['cart_item'] as $key => $value) {
                    if ($_GET['id'] == $key) {
                        unset($_SESSION['cart_item'][$key]);
                    }
                    if (empty($_SESSION['cart_item'])) {
                        unset($_SESSION['cart_item']);
                    }
                }
            }
            break;
        case 'empty':
            unset($_SESSION['cart_item']);
            break;
    }
}


?>
<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
<name>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</name>
<style>
hr.new4 {
  border: 1px solid red;
}

table td:nth-child(1){
    width: 170px;
}

 table td:nth-child(2){
    width: 300px;
 }
 table td:nth-child(3){
    width: 50px;
}
table td:nth-child(4){
    width: 50px;
}
table td:nth-child(5),
table td:nth-child(6){
    width: 100px;
}
table tbody img{
    width: 100px;
    height: 80px;
    object-fit: cover;
}
table ,tbody, tr,td{
    text-align: center;
    vertical-align: middle;
    border-collapse: collapse;
    background-color: white;
    color: black;
    padding: 20px , 0;
    border: 1px solid black;
}
table ,thead, tr,th{
      text-align: center;
    vertical-align: middle;
    background-color: orange;
    color: black;
    padding: 6px , 0;
    border: 1px solid black;
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
                                <li class="breadcrumb-item"><a href="shop.php">Shopping Cart</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>



<div class="container py-5">
   
        <h1>Shopping Cart</h1>
        <hr class="new4">
        <div class="a-right">
        <!-- if table is empty -->
        <a class="brand-text" href="shopping_cart.php?action=empty" style="color:#f44245 ">Empty Cart</a><br><br>
        <!-- else dont display -->
    
        </div>
    <div class="row">
        <?php
            $total_quantity = 0;
            $total_price = 0;
        ?>
        <table class="table">
            <thead>
            <tr>
                <th class="text-left">Image</th>
                <th class="text-left">Name</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Item price</th>
                <th class="text-right">Price</th>
                <th class="text-center">Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                foreach ($_SESSION['cart_item'] as $item) {
                    $item_price = $item['quantity'] * $item['price'];
                    ?>
                    <tr><center>
                        <td><?php echo '<img src="data:image/jpg;base64,'.base64_encode( $item['image'] ).'"alt="images" >';?></td>
                        <td class="text-left">
                            <?php echo $item['name'] ?>
                        </td>
                        <td class="text-center"><?php echo $item['quantity'] ?></td>
                        <td class="text-center">₹<?php echo number_format($item['price'], 2) ?></td>
                        <td class="text-center">₹<?php echo number_format($item_price, 2) ?></td>
                        <td class="text-center">
                            <a href="shopping_cart.php?action=remove&id=<?= $item['id']; ?>" style="color: black;">X</a>
                        </td></center>
                    </tr>

                    <?php
                    $total_quantity+= $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                }
                $_SESSION['total_price']=$total_price;
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><strong><?= $total_quantity ?></strong></td>
                    <td></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>

            <?php }

                ?>
            </tbody>
        </table>
        <br>
        <br>

<a class="brand-text" href="checkout.php?action=empty" style="color:#f44245 ">Checkout</a><br><br>
    </div>



</body>
</html>

<?php
include 'footer.php';
?>