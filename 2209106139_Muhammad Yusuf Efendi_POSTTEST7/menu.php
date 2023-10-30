<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - warmindo</title>
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
            background-color:#3D5B59;
            color: #fff; 
            position: fixed;
            width:100%;
            top:0;
            left:0;
        }

        .sidebar {
            border:1px solid;
            position: fixed;
            width: 250px;
            top:0;
            left:-250px;
            bottom:0;
            background-color: #fff;
            padding-top:40px;
            transition: all .5s;
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

        /* .sidebar-body ul li a {
            border: 1px solid;
            width:100%
            display:inline-block;
            padding: 7px 15px;
            box-sizing:border-box;
        } */
        .sidebar-body ul li a:hover {
            background-color: #B5E5CF;
        }

        .sidebar-body ul li:not(last-child){
            border-bottom:1px solid #ccc;
        }

        /* banner */
        .banner {
            border: 1px solid;
            padding: 70px 15px 40px;
            background-image: url('img/bukan-mie.jpg') 
        }

        /* content */
        .content {
            padding: 25px 0;
        }

        .container {
            width: 540px;
            padding-left: 15px;
            padding-right: 15px;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
        }

        .row {
            margin-left: -15px;
            margin-right: -15px;
            display: flex;
            flex-wrap: wrap;
        }

        .col-6 {
            flex: 0 0 50%;
            box-sizing: border-box;
            margin-bottom: 15px;
            padding-left: 15px;
            padding-right : 15px;
        }

        .card-menu {
            border:1px solid;
            background-color: #fff;
            border-radius: 5px;
        }

        .card-menu img{
            width: 100%;
            height: 150px;
            object-fit:cover;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .card-body{
           
            padding: 8px;
        }

        .menu-name {
           
            height: 45px;
            overflow: hidden;
            display: -webkit-box;
            text-overfloaw:ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            margin-bottom: 8px;
        }

        .menu-price{
            font-weight: bold;
            text-align: right; 
        }

        @media (max-width: 768px){
            .container{
                width:100%;
            }
        }
    </style>
</head>
<body>
        <div class="navbar">
            <a href="#" id="btnBars">
                <i class="fa fa-bars"></i>
            </a>

        </div>

        <div class="sidebar sidebar-hide">
            <div class="sidebar-body">
                <h2>kategori</h2>
                <ul>
                    <li><a href="">Makanan</a></li>
                    <li><a href="">Minuman</a></li>
                </ul>
            </div>
        </div>

        <!-- banner -->
        <div class= "banner">
            <div class= "banner-text">
                <h1>WARMINDO</h1>
                <p>Daftar Menu Makanan Dan Minuman</p>

            </div>

        </div>

        <!-- content -->
        <div class="content">
            <div class="container">

            <!--    list menu makanan -->
            <div class="row">
                
            <!-- menu item -->
            <!--  -->
                <?php for($i=1; $i<=50; $i++){ ?> 
                <div class="col-6">

                <a href="detail.php">
                    <div class="card-menu">
                    <img src="img/menu-mie1.jpg">
                    <div class="card-body">
                        <div class="menu-name">Mie Goreng Indomie HOT</div>
                        <div class="menu-price">Rp.35.000</div>
                    </div>
                    </div>
                </a>
                </div>
                <?php } ?>

                <!-- <div class="col-6">
                <div class="card-menu">
                    <img src="img/menu-mie2.jpg">
                    <div class="card-body">
                        <div class="menu-name">Mie Kuah Indomie HOT</div>
                        <div class="menu-price">Rp.30.000</div>
                    </div>
                    </div>
                </div>
                
                <div class="col-6">
                <div class="card-menu">
                    <img src="img/AYAM.jpg">
                    <div class="card-body">
                        <div class="menu-name">Mie Ayam Indomie HOT</div>
                        <div class="menu-price">Rp.40.000</div>
                    </div>
                    </div>
                </div>

                <div class="col-6">
                <div class="card-menu">
                    <img src="img/MIE-REBUS.png">
                    <div class="card-body">
                        <div class="menu-name">Mie Rebus Indomie </div>
                        <div class="menu-price">Rp.10.000</div>
                    </div>
                    </div>
                </div> -->
            </div>
            
            </div>


        </div>
        <script type="text/javascript">
            
            var btnBars = document.getElementById('btnBars')
            var sidebar = document.querySelector(".sidebar")

            btnBars.addEventListener('click', function(e){
                e.preventDefault();

                sidebar.classList.toggle('sidebar-show')   
            })
        </script>
</body>
</html>