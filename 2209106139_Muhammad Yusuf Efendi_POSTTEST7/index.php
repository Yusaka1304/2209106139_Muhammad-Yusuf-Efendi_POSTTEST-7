<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $messageText = $_POST["message"];
    
    $message = "<strong>Name:</strong> " . htmlspecialchars($name) .
               "<br><strong>Email:</strong> " . htmlspecialchars($email) .
               "<br><strong>Phone Number:</strong> " . htmlspecialchars($phone) .
               "<br><strong>Message:</strong> " . htmlspecialchars($messageText);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARMINDO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- fontawesome -->
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">

   
    <style>
        /* Dark Mode Styles */
        body.dark-mode {
            background-color: #000;
            color: #fff;
        }

        #promo-popup .bg-white {
            max-width: 400px;  /* Anda bisa mengatur lebar maksimum sesuai keinginan */
        }

        #promo-popup {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        body.dark-mode {
            background-color: #000;
            color: #fff;
        }
        
        body.dark-mode #tm-nav, 
        body.dark-mode .tm-item-container, 
        body.dark-mode #promo-popup .bg-white {
            background-color: #333;  /* Latar belakang gelap untuk navigasi dan bagian lainnya */
        }
        
        body.dark-mode a, 
        body.dark-mode a:hover {
            color: #ddd;  /* Warna tautan lebih terang dalam mode gelap */
        }
        
        body.dark-mode .tm-text-gold {
            color: #ffd700;  /* Sesuaikan warna lainnya sesuai kebutuhan */
        }
        
        /* Tambahkan gaya lain sesuai kebutuhan... */

        #result {
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        
        
    </style>

</head>
<body>  
    
    <!-- Intro -->
    <div id="intro" class="parallax-window" data-parallax="scroll" data-image-src="img/mie1.jpg">
        <nav id="tm-nav" class="fixed w-full">
            
            
            <div class="tm-container mx-auto px-2 md:py-6 text-right">
                <button class="md:hidden py-2 px-2" id="menu-toggle"><i class="fas fa-2x fa-bars tm-text-gold"></i></button>
                <ul class="mb-3 md:mb-0 text-2xl font-normal flex justify-end flex-col md:flex-row">
                    <li class="inline-block mb-4 mx-4"><a href="#intro" class="tm-text-gold py-1 md:py-3 px-4">Intro</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#about" class="tm-text-gold py-1 md:py-3 px-4">About</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#contact" class="tm-text-gold py-1 md:py-3 px-4">Contact</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="javascript:void(0);" id="promo-btn" class="tm-text-gold py-1 md:py-3 px-4">Promo</a></li>
                    <li class="inline-block mb-4 mx-4">
                        <a href="javascript:void(0);" id="tombol-mode-gelap" class="tm-text-gold py-1 md:py-3 px-4">Mode Gelap</a>
                    </li>
                </ul>
            </div>  
            
                      
        </nav>
        <!-- Pop-up box -->
        <div id="promo-popup" class="fixed top-0 left-0 w-full h-full flex justify-center items-center " style="display: none;">
            <div class="bg-white p-8 rounded-xl">
                <h2 class="text-2xl mb-4">Promosi Spesial!</h2>
                <p>Dapatkan diskon 10% untuk pembelian pertama Anda.</p>
                <button id="close-popup" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Tutup</button>
            </div>
        </div>

        <div class="container mx-auto px-2 tm-intro-width">
            <div class="sm:pb-60 sm:pt-48 py-20">
                <div class="bg-black bg-opacity-70 p-12 mb-5 text-center">
                    <h1 class="text-white text-5xl tm-logo-font mb-5">WARMINDO</h1>
                    <p class="tm-text-gold tm-text-2xl">Nikmati harimu dengan satu bungkus indomie</p>
                </div>    
               
                </div>
                <div class="text-center">
                    <div class="inline-block">
                        <a href="#menu" class="flex justify-center items-center bg-black bg-opacity-70 py-6 px-8 rounded-lg font-semibold tm-text-2xl tm-text-gold hover:text-gray-200 transition">
                            <i class="fas fa-noodle mr-3"></i>
                            <span id="linkSpan" style="cursor: pointer; color: white; text-decoration: underline;">lets explore..</span>
                        
                        </a>
                    </div>                    
                </div>                
            </div>
        </div>        
    </div>

    <div id="about" class="parallax-window" data-parallax="scroll" data-image-src="img/mie6.jpg">
        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="tm-item-container sm:ml-auto sm:mr-12 mx-auto sm:px-0 px-4">
                <div class="bg-white bg-opacity-80 p-12 pb-14 rounded-xl mb-5">
                    <h2 class="mb-6 tm-text-green text-4xl font-medium">About Me</h2>
                    <p class="mb-6 text-base leading-8" style="color: darkgreen;">
                        Muhammad Yusuf Efendi adalah seorang pengusaha yang berdedikasi dan kreatif dalam mengelola Warung Mie Indomie. Usahanya didirikan dengan tujuan untuk memberikan pengalaman kuliner yang tak terlupakan kepada pelanggan. Dengan cinta mendalam pada Mie Indomie, ia berinovasi untuk menciptakan hidangan lezat dan berkualitas. Warung Mie Indomie bukan hanya sebuah tempat makan, melainkan juga tempat berkumpulnya teman dan keluarga. Muhammad Yusuf Efendi berkomitmen untuk membangun masa depan yang cerah bagi bisnis ini dan sangat bersyukur atas dukungan pelanggan setianya.
                
                </div>
                <a href="#contact" class="inline-block tm-bg-green transition text-white text-xl pt-3 pb-4 px-8 rounded-md">
                    <i class="far fa-comments mr-4"></i>
                    Contact
                </a>
            </div>           
        </div>        
    </div>
    <div id="contact" class="parallax-window relative" data-parallax="scroll" data-image-src="img/mie7.jpg">
        <div class="container mx-auto tm-container pt-24 pb-48 sm:py-48">
            <div class="flex flex-col lg:flex-row justify-around items-center lg:items-stretch">
                <div class="flex-1 rounded-xl px-10 py-12 m-5 bg-white bg-opacity-80 tm-item-container">
                    <h2 class="text-3xl mb-6 tm-text-green">Contact Us</h2>
                    <p class="mb-6 text-lg leading-8"><br>
                        Silahkan hubungi kontak/Email Sayaa 
                    </p>
                    <p class="mb-10 text-lg">
                        <span class="block mb-2"><br>Tel: <a href="tel:0100200340" class="hover:text-yellow-600 transition">0813-4258-4382</a></span>
                        <span class="block"><br>Email: <a href="mailto:info@company.com" class="hover:text-yellow-600 transition">YUSAKAA1304@gmail.com</a></span>
                        <span class="block mb-2"> <br> IG: <a href="tel:0100200340" class="hover:text-yellow-600 transition"> @Yusakaaa</a></span>                        
                    </p>
                    <div class="text-center">
                    
                    </div>                    
                </div>
                <div class="flex-1 rounded-xl p-12 pb-14 m-5 bg-black bg-opacity-50 tm-item-container">
                    <form action="" method="POST" class="text-lg" style="color: #000;">
                        
                        <input type="text" name="name" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Name" required="" />
                        <input type="email" name="email" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Email" required="" />
                        <input type="text" name="phone" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Phone Number" required="" />
                        <textarea rows="6" name="message" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Message..." required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="text-white hover:text-yellow-500 transition">Send it</button>

                            <div id="result" class="mt-4">
                                    <?php echo $message; ?>
                            </div>

                        </div>                        
                      </form>
                </div>
            </div>
            <footer class="absolute bottom-0 left-0 w-full">
                <div class="text-white container mx-auto tm-container p-8 text-lg flex flex-col md:flex-row justify-between">
                    <span>Ucup Ganteng Yaiyadonkkk</span>
                    
                </div>                
            </footer>
        </div>        
    </div>    

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script>

        function checkAndShowHideMenu() {
            if(window.innerWidth < 768) {
                $('#tm-nav ul').addClass('hidden');                
            } else {
                $('#tm-nav ul').removeClass('hidden');
            }
        }

        $(function(){
            var tmNav = $('#tm-nav');
            tmNav.singlePageNav();

            checkAndShowHideMenu();
            window.addEventListener('resize', checkAndShowHideMenu);

            $('#menu-toggle').click(function(){
                $('#tm-nav ul').toggleClass('hidden');
            });

            $('#tm-nav ul li').click(function(){
                if(window.innerWidth < 768) {
                    $('#tm-nav ul').addClass('hidden');
                }                
            });

            $(document).scroll(function() {
                var distanceFromTop = $(document).scrollTop();

                if(distanceFromTop > 100) {
                    tmNav.addClass('scroll');
                } else {
                    tmNav.removeClass('scroll');
                }
            });
            
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'


                    });
                });
            });
        });
       $(document).ready(function() {

        $("form").submit(function(e) {
            e.preventDefault(); // Menghentikan form dari pengiriman normal
    
            // Mengambil nilai dari inputan
            var name = $('input[name="name"]').val();
            var email = $('input[name="email"]').val();
            var phone = $('input[name="phone"]').val();
            var message = $('textarea[name="message"]').val();
    
            // Menampilkan hasil di div #result
            $("#result").html(
                "<strong>Name:</strong> " + name + 
                "<br><strong>Email:</strong> " + email + 
                "<br><strong>Phone Number:</strong> " + phone +
                "<br><strong>Message:</strong> " + message
            );
        });

    // Fungsi untuk menangani klik pada tombol "Promo"
    $('#promo-btn').click(function() {
        if ($('#promo-popup').is(":visible")) {
            $('#promo-popup').fadeOut(); // Menyembunyikan pop-up jika sedang ditampilkan
        } else {
            $('#promo-popup').fadeIn();  // Menampilkan pop-up jika sedang disembunyikan
        }
    });

    // Fungsi untuk menangani klik pada tombol "Tutup" di dalam pop-up box
    $('#close-popup').click(function() {
        $('#promo-popup').fadeOut();
    });

    // Mencegah pop-up tertutup saat mengklik kontennya
    $("#promo-popup > div").click(function(e) {
        e.stopPropagation();
    });

});
$(document).ready(function() {

    // Fungsi untuk menangani klik pada tombol "Promo"
    $('#promo-btn').click(function() {
        // Menampilkan pop-up
        $('#promo-popup').fadeIn();

        // Menunda penutupan pop-up selama 3 detik (3000 milidetik)
        setTimeout(function() {
            $('#promo-popup').fadeOut();
        }, 3000);
    });

    // Fungsi untuk menangani klik pada tombol "Tutup" di dalam pop-up box
    $('#close-popup').click(function() {
        $('#promo-popup').fadeOut();
    });

    // Mencegah pop-up tertutup saat mengklik kontennya
    $("#promo-popup > div").click(function(e) {
        e.stopPropagation();
    });

    $('#tombol-mode-gelap').click(function(){
        $('body').toggleClass('dark-mode');
    });
    

});
    
document.getElementById('linkSpan').addEventListener('click', function() {
    window.location.href = 'http://localhost/2209106139_Muhammad%20Yusuf%20Efendi_POSTTEST7/login.php';
});


    </script>
      
</body>
</html>