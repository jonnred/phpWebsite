<?php 
    include './includes/header.php';
?>

<body> 
    <?php 
    include './includes/nav.php';
    ?>
    <div class='container-login'>
        <div class="login container">
            <h3 class="header">Log In</h1>
            <div class="login-contents">
                <form action="" method="get" id='login'>
                    <label for="username">Username</label>
                    <input type="text" name="username" value='' placeholder='Username'>
                    <label for="password">Password</label>
                    <input type="password" name="password" value='' placeholder='Password'>
                    <button type="submit">Confirm</button>
                    <a href="signup.php">Sign Up</a>
                </form>
            </div>
        </div>
    </div>
    <?php
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn , $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck>0){
            echo $row['password'];
                while($row = mysqli_fetch_assoc($result)){
                    
            }
        }
    ?>
    <?php 
    include './includes/footer.php';
?>

</body>

</html>