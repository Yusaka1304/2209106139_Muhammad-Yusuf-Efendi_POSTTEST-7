<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - warmindo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <style type="text/css">
         @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,500&display=swap');
        *{
            padding:0;
            margin:0;
        }

        html, body {
    height: 100%;
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(135deg, #84fab0, #8fd3f4);
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.card-login {
    width: 100%;
}

.input-control, .btn {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 2px solid #ddd;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.input-control:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}

.btn {
    background-color: #3498db;
    color: #ffffff;
    cursor: pointer;
    border: none;
}

.btn:hover {
    background-color: #2980b9;
}

.error-message {
    color: red;
    font-size: 0.9rem;
    text-align: center;
}

.card-login h2 {
    margin-bottom: 10px;
    text-align: center;  /* Baris ini memusatkan tulisan */
}

    </style>
</head>
<body>

    <!-- login -->
    <div class="container">
    <div class="card-login">
    
    <h2>Login</h2>
    <form action="" method="post">
        <input type="text" name="user" placeholder="username" class="input-control">
        <input type="password" name="pass" placeholder="password" class="input-control">
        <button type="submit" name="login" class="btn">Login</button>
        <button type="submit" name="login" class="btn"><a href="register.php" class="btn">Daftar</a></button>
        
    </form>


</div>

        <?php

        // cek jika tombol login di tekan
        if(isset($_POST['login'])){
            include 'database.php';
        
            $query_select = 'SELECT * FROM users WHERE username = "'.$_POST['user']. '" AND password = "'.md5($_POST['pass']).'"';
            $run_query_select = mysqli_query($conn, $query_select);
            $d = mysqli_fetch_object($run_query_select);
        
            if($d){
                $_SESSION['uid'] = $d->iduser;
                $_SESSION['uname'] = $d->namalengkap;
                header('location:admin/index.php');
            } else {
                echo 'username atau password salah';
            }
        }
        


       
        ?>
    </div>
    </div>
</body>
</html>