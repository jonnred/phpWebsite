<?php 
    include './includes/header.php';
?>
 <?php 
    include './includes/nav.php';
?>
<div class="bgcolor hero-img" >
    <h1>Product Sell</h1>
</div>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class='container-login'>
        <div class="login container">
            <h3 class="header">Sell your product</h1>
            <div class="login-contents">
                <form action="" method="get" id='login'>
                    <label for="seller-name">Seller name</label>
                    <input type="text" name="seller-name" value='' placeholder='Seller Name'>
                    <label for="password">Password</label>
                    <input type="password" name="password" value='' placeholder='Password'>
                    <label for="product-name">Product Name</label>
                    <input type="text" name="product-name" value='' placeholder='Product Name'>
                    <label for="product-price">Product Price</label>
                    <input type="number" name="product-price" value='' placeholder='Product Price'>
                    <button type="submit">Confirm</button>
                    <a href="signup.php">Sign Up</a>
                </form>
            </div>
        </div>
    </div>


<?php 
    include './includes/footer.php';
?>
</body>
</html>