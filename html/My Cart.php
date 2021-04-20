<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../javascript/mycart.js" defer></script>
</head>
<body>
    <div id="nav-placeholder"></div>
        <script>
        $(function(){
        $("#nav-placeholder").load("navbar.html");
        });
        </script>

    <main>
<!--Products in cart details-->
    <div class="container cart-page">
        <table class="cart-items">

            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price per unit</th>
                
            </tr>

            <tr class="cart-row">
                <td>
                    <div class="cart-info">
                        <img src="../Images/appless.jpg" >
                        <div>
                            <p class="cart-item-title">Apples</p>
                            <small><b>Price:</b> $00.79/lb</small></br>

                            <button class="btn btn-danger"> REMOVE </button>
                        </div>
                    </div>
                </td>
                <td> <input class="cart-quantity-input" type="number" value="2"></td>
                <td class="cart-price">$0.79</td>
            </tr>

            <tr class="cart-row">
                <td>
                    <div class="cart-info">
                        <img src="../Images/beef.jpg" >
                        <div>
                            <p class="cart-item-title">Beef</p>
                            <small><b>Price:</b> $10.00/lb</small></br>

                            <button class="btn btn-danger"> REMOVE </button>
                        </div>
                    </div>
                </td>
                <td ><input class="cart-quantity-input" type="number" value="1"></td>
                <td class="cart-price" >$10.00</td>
            </tr>

            <tr class="cart-row">
                <td>
                    <div class="cart-info">
                        <img src="../Images/shrimp.jpg" >
                        <div>
                            <p class="cart-item-title">Shrimp</p>
                            <small><b>Price:</b> $13.99/lb</small></br>

                            <button class="btn btn-danger"> REMOVE </button>
                        </div>
                    </div>
                </td>
                <td ><input class="cart-quantity-input" type="number" value="2"></td>
                <td class="cart-price" >$27.98 </td>
            </tr>

        </table>
    </div>
    <button class='place-order' class="shop-item-button" onclick="placeOrderClicked()"><span  class="cart-btn">Place order</span></button>
        <div class = "container cart-page" div class="total-price">
            <table>
                <tr>
                    <td><b>Subtotal</b></td>
                    <td class='cart-subtotal-price'> $67.54 </td>
                </tr>
                <tr>
                    <td>Number of items</td>
                    <td class="cart-item-num">5</td>
                </tr>
                <tr>
                    <td>QST (9.975%)</td>
                    <td class="cart-taxesQST-price">$6.74</td>
                </tr>
                <tr>
                    <td>GST (5%)</td>
                    <td class="cart-taxesGST-price">$3.38</td>
                </tr>
                <tr>
                    <td>Shipping price</td>
                    <td class="cart-shipping-price">$4.50</td>
                </tr>
                <tr>
                    <td><b>Total</b></td>
                    <td class="cart-total-price">$82.16</td>
                </tr>
                <tr>
                    <td><a href="Products.html">Continue shopping</a></td>
                </tr>
            </table>
        </div>
    </div>
       
    </div>

    </main>

    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("footer.html");
        });
        </script>
    
</body>
</html>