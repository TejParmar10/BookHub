<?php
    session_start();
    require_once 'connect.php';
            else {
                if(isset($_SESSION['isLogin'])) {
                    // echo "Connected successfully";
                    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $components = parse_url($url);
                    parse_str($components['query'], $results);
                    $itemId = $results['itemId']; 
                    $Qty = $results['quantity'];
                    $userId = $_SESSION['UserId'];

                    $sql = "INSERT INTO `orders` (`OrderId`, `ItemId`, `Quantity`, `UserId`) VALUES (NULL, '$itemId', '$Qty', '$userId')";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                        header("Location: ./product_description.php?Id=$itemId");
                    }
                }
                else {
                    echo "<div>Please login first</div>";
                    header("Location: ./login.php");
                }
            }
       
?>