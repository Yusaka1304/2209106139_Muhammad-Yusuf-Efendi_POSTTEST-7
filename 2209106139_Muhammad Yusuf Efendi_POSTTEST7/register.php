<?php
session_start();
include 'database.php'; // Asumsi bahwa Anda sudah memiliki file database.php untuk koneksi database

$pesan_sukses = ""; // Inisialisasi variabel untuk menyimpan pesan sukses

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']); // Pertimbangkan menggunakan hash yang lebih aman seperti password_hash()
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);

    $query_insert = "INSERT INTO users (username, password, namalengkap) VALUES ('$username', '$password', '$fullname')";
    
    if (mysqli_query($conn, $query_insert)) {
        $pesan_sukses = "<p>Pendaftaran berhasil. <a href='login.php'>Login di sini</a></p>";
    } else {
        $pesan_sukses = "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bagian head - Sama seperti di halaman login -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - warmindo</title>
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
    <div class="container">
        <div class="card-login">
            <h2>Daftar</h2>
            <form action="register.php" method="post">
            <input type="text" name="fullname" placeholder="Nama Lengkap" class="input-control" required>
                <input type="text" name="username" placeholder="Username" class="input-control" required>
                <input type="password" name="password" placeholder="Password" class="input-control" required>
                <button type="submit" name="register" class="btn">Daftar</button>
                <?php echo $pesan_sukses; ?>
            </form>
        </div>
    </div>
</body>
</html>
