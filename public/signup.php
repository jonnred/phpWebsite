<?php 
    include './includes/header.php';
?>

<body>
    <?php 
    include './includes/nav.php';
?>
    <div class='container-login'>
        <div class="login container">
            <h3 class="header">Sign Up</h1>
            <div class="login-contents">
                <form action="./includes/signup.inc.php" method="post" id='login'>
                    <label for="first">First Name</label>
                    <input type="text" name="first" value='' placeholder='First Name'>
                    <label for="last">Last Name</label>
                    <input type="text" name="last" value='' placeholder='Last Name'>
                    <label for="username">Username</label>
                    <input type="text" name="username" value='' placeholder='Username'>
                    <label for="email">Email</label>
                    <input type='email' name="email" value='' placeholder='Email'>                        
                    <label for="password">Password</label>
                    <input type="password" name="password" value='' placeholder='Password'>
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm-password" value='' placeholder='Password'>
                    <button type="submit">Confirm</button>
                    <a href="login.php">Log In</a>
                </form>
            </div>
        </div>
    </div>

    <?php 
    include './includes/footer.php';
?>

</body>

</html>