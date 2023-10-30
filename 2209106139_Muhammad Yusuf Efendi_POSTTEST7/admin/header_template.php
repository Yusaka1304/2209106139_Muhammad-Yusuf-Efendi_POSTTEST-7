<?php
    session_start();
    include '../database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - warmindo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <style type="text/css">
         @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,500&display=swap');
        *{
            padding:0;
            margin:0;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }
        a {
            color:inherit;
            text-decoration:none;
        }

        .navbar {
            border:1px solid;
            padding: 0.5rem 1rem;
            background-color: #007BFF; /* Ganti warna latar belakang */
            color: #fff; 
            position: fixed;
            width:100%;
            top:0;
            left:0;
            transition: background-color 0.3s; /* Efek transisi perubahan warna latar belakang */
            z-index: 99;
            display: flex;
            align-items: center;
        }

        .navbar h1{
            margin-left: 15px;
            font-size: 20px;
            line-height: 21px;
        }

        .navbar:hover {
            background-color: #0056b3; /* Warna latar belakang saat dihover */
        }

        .sidebar {
            border:1px solid;
            position: fixed;
            width: 250px;
            top:0;
            left:-250px;
            bottom:0;
            background-color: #0056b3; /* Ganti warna latar belakang */
            padding-top:40px;
            transition: left .5s;
        } 

        .sidebar-hide {
            left:-250px;
        }

        .sidebar-show {
            left:0;
        }

        .sidebar-body {
            border:1px solid;
            padding:15px;
        }

        .sidebar-body h2 {
            margin-bottom: 8px;
        }

        .sidebar-body ul {
            list-style: none;
        }

        .sidebar-body ul li a {
            color: #fff; /* Ganti warna teks link */
            text-decoration: none;
            display: block;
            padding: 10px 20px; /* Sesuaikan padding */
        }
        /* .sidebar-body ul li a {
            border: 1px solid;
            width:100%
            display:inline-block;
            padding: 7px 15px;
            box-sizing:border-box;
        } */
        .sidebar-body ul li a:hover {
        background-color: #007BFF; /* Warna latar belakang saat dihover */
        color: #fff; /* Warna teks saat dihover */
        }
        .sidebar-body ul li:not(last-child){
            border-bottom:1px solid #ccc;
        }

        /* content */
        .content {
            padding: 60px 0;
        }

        .container {
            width: 960px;
            margin-left: auto;
            margin-right: auto;
        }

        .card {
            border:1px solid #ccc;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
        }
        
        .page-title {
            margin-bottom: 10px;
        }

        .table {
            width:100%;
            border-collapse: collapse;
            margin-top: 8px;
        }

        .table thead th,
        .table tbody td {
            border:1px solid;
            padding:3px;
        }

        .btn{
            border: 1px solid;
            padding: 3px 8px;
            display: inline-block;
            background-color: #67595E;
            color: #fff; 
            border-radius:3px;
        }

        .input-group {
            margin-bottom: 8px;
        }

        .input-group label{
            display: block;
            margin-bottom: 5px;
        }

        .input-control {
            width: 100%;
            box-sizing: border-box;
            padding:0.5rem;
            font-size: 1rem;
        }  

        .btn-submit {
            border: 1px solid #007BFF;
            padding: 8px 20px;
            display: inline-block;
            background-color: #007BFF;
            color: #fff; 
            border-radius:3px;
            font-size: 1rem;
            cursor: pointer;
        }

        .btn-back {
            border: 1px solid ;
            padding: 8px 20px;
            display: inline-block;
            border-radius:3px;
            font-size: 1rem;
            cursor: pointer;
        }

        .dashboard {
        box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
        border-radius: 10px;
        padding: 20px;
        background-color: #34495e;
}

        .datetime-zone {
            font-size: 14px;
            font-weight: bold;
            padding: 5px;
            border: 1px solid #ecf0f1;
            border-radius: 5px;
            text-align: center;
            margin-left: auto; /* agar berada di sebelah kanan navbar */
            margin-right: 15px;
        }

    </style>
</head>
<body>
        <div class="navbar">
            <a href="#" id="btnBars">
                <i class="fa fa-bars"></i>
            </a>
            <h1>WARMINDO</h1>
            <div class="datetime-zone" id="datetimeZone"></div>
        </div>

        <div class="sidebar sidebar-hide">
            <div class="sidebar-body">
                <h2>navigasi</h2>
                <ul>
                    <li><a href="menu.php">Beranda</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <li><a href="qrcode.php">QR code</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

