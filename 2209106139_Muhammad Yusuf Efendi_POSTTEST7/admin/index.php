<?php
    
    require_once 'header_template.php';
?>

<div class="content">
    <div class= "container">

    <h3 class="page-title">Beranda</h3>
        <div class="card">
            <h2> Haii <?=$_SESSION['uname']?>,</h2>
            <p>Selamat Datang di WARMINDO</p>
        </div>
    </div>
</div>

<?php require_once 'footer_template.php'; ?>