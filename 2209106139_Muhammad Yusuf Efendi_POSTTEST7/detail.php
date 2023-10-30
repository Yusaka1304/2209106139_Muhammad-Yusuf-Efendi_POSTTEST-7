<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - warmindo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <style type="text/css">
         @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,500&display=swap');
        *{
            padding:0;
            margin:0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color:#D4F1F4;
        }
        a {
            color:inherit;
            text-decoration:none;
        }
        /*detail content*/
        .container {
            width: 540px;
            margin-left:auto;
            margin-right:auto;

        }

        .card-menu {
            background-color: #75E6DA;
            position:relative;
            margin-bottom: 15px;
        }

        .card-menu .btn-back {
            border: 1px solid;
            padding: 10px 15px;
            display: inline-block;
            border-radius: 50%;
            background-color: #75E6DA;
            position: absolute;
            top: 10x;
            left: 10px;
        }

        .card-menu img{
            width: 100%
        }

        .card-body {
            padding: 15px;
        }

        .card-body .menu-name {
            font-size: 18px;
        }

        .card-body .menu-description {
            font-size: 14px;
            color: #282828;
            margin-bottom: 15px;
        }

        .card-body .menu-price {
            font-weight: bold;
        }

        .extra-menu { 
            background-color: #fff;
            padding: 15px;
            margin-bottom: 25px;
        }

        .extra-menu h3{
            margin-bottom: 8px;
        }
        
        .extra-menu ul {
            list-style: none;
        }

        .extra-menu ul li {
            padding: 5px 0;
            display: flex;
            justify-content: space-between;

        }

        .extra-menu ul li:not(:last-child) {
            border-bottom: 1px dashed;
        }

        @media (max-width: 768px){
            .container{
                width:100%;
            }
        }
    </style>
</head>
<body>

    <!-- detail content -->
    <div class="container">
        <div class="card-menu">

            <a href="menu.php" class="btn-back"><i class="fa fa-arrow-left"></i></a>
            <img src="img/menu-mie1.jpg">

            <div class="card-body">
            <div class="menu-name">Mie Goreng Indomie HOT</div>
            <div class="menu-description">Nasi+Ayam+Sambal</div>
            <div class="menu-price">Rp.35.000</div>
            </div>
        </div>

        <div class="extra-menu">
        <h3>Menu Tambahan</h3>
        <ul>
            <li><span>Kornet</span> <span>0</span></li>
            <li><span>Udang</span> <span>3.000</span></li>
            <li><span>kerupuk</span> <span>1.000</span></li>
            <li><span>Sosis</span> <span>3.000</span></li>
        </ul>
        </div>
    </div>
</body>
</html>