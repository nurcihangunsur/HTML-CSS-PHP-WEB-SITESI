<!DOCTYPE html>
<html lang="tr">
<head>
    <script src="https://kit.fontawesome.com/039f4de4bf.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANASAYFA</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    <section id="menu">
        <div id="logo">Paylaştıkça</div>
        <nav>
            <a href=""> <i class="fa-solid fa-house ikon"></i>Anasayfa </a>
            <a href=""> <i class="fa-solid fa-info ikon"></i>Hakkımızda </a>
            <a href=""> <i class="fa-solid fa-graduation-cap ikon"></i>Eğitimler </a>
            <a href=""> <i class="fa-solid fa-user-plus ikon"></i> Ekip </a>
            <a href=""> <i class="fa-solid fa-map-pin ikon"></i> İletişim </a>

        </nav>
    </section>
    <section id="anasayfa">
       <div id="black">

       </div>

       <div id="icerik">
        <h2>Paylaştıkça</h2>
        <hr width="300" align="left">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore suscipit ut natus magnam commodi assumenda quasi porro qui voluptatibus sed cum laboriosam tenetur quisquam pariatur, voluptates numquam, nostrum veniam culpa!</p>
       </div>
    </section>
    <section id="hakkimizda">
       <h3>
        Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, sapiente recusandae magnam!</h5>
            </div>
            <div id="sag">
                <span>L</span>
                <p id="psag">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui eligendi nostrum rerum dolores esse delectus, numquam, autem ab amet nulla dolore minima, ducimus enim ad impedit. Eligendi fugit temporibus necessitatibus?</p>

            </div>
            <img src="img/about.jpg" alt="" class="img-fluid mt100">
            <p id="pson">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore officia hic consequatur ipsa asperiores totam, sequi accusamus maxime velit quaerat odit quod eligendi optio, itaque fuga, molestiae accusantium obcaecati vel!</p>

        </div>
    </section>
    <section id="egitimler">
        <div class="container">
            <h3>Eğitimler</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard"> HTML5 ve CSS3 Eğitimi </h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero placeat quo quod nam unde, tenetur deleniti, odit sapiente pariatur, quas magni. Officia harum odit dicta labore perferendis rem animi eos.</p>

                </div>
                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard"> HTML5 ve CSS3 Eğitimi </h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero placeat quo quod nam unde, tenetur deleniti, odit sapiente pariatur, quas magni. Officia harum odit dicta labore perferendis rem animi eos.</p>

                </div>
                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard"> HTML5 ve CSS3 Eğitimi </h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero placeat quo quod nam unde, tenetur deleniti, odit sapiente pariatur, quas magni. Officia harum odit dicta labore perferendis rem animi eos.</p>

                </div>
            </div>

        </div>

    </section>
    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>
            <div class="sutun-sol-sag">
                <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Hakan Çelik</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing... </p>
                <div class="ekipikon">
                 <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                 <a href="#"><i class="fa-brands fa-google social"></i></a>
                 <a href="#"><i class="fa-brands fa-twitter social"></i></a>

                </div>
            </div>
            <div class="sutun">
                <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Onur Çelik</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing... </p>
                <div class="ekipikon">
                 <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                 <a href="#"><i class="fa-brands fa-google social"></i></a>
                 <a href="#"><i class="fa-brands fa-twitter social"></i></a>

                </div>
            </div>
            <div class="sutun-sol-sag">
                <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Sertap Çelik</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing... </p>
                <div class="ekipikon">
                 <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                 <a href="#"><i class="fa-brands fa-google social"></i></a>
                 <a href="#"><i class="fa-brands fa-twitter social"></i></a>

                </div>
            </div>
        </div>
    </section>
    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim </h3>
            <form action="index.php" method="post">
            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarasi" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="email" placeholder="Email Adresiniz..." required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı..." required class="form-control">
                    </div>
                    <textarea name="mesaj"  cols="30" rows="10" placeholder="Mesaj Giriniz..." required class="form-control"></textarea>
                    <input type="submit" value="Gönder">


                </div>
                <div id="adres">
                    <h4 id="adresbaslik">Adres:</h4>
                    <p class="adresp">Karaduvar Mahallesi</p>
                    <p class="adresp">6566 Sokak</p>
                    <p class="adresp">Akdeniz/Mersin</p>
                    <p class="adresp">05432345445</p>
                    <p class="adresp">Email:nurcihangunsur@gmail.com</p>
                </div>
            </div>
            </form>
            <footer> 
                <div id="copright"> 2023 | Tüm Hakları Saklıdır.</div>
                <div id="socialfooter">
                 <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                 <a href="#"><i class="fa-brands fa-google social"></i></a>
                 <a href="#"><i class="fa-brands fa-twitter social"></i></a>

                </div>
                <a href="#menu"><i class="fa-solid fa-angle-up i" id="up"></i></a>
            </footer>

        </div>
    </section>


    <script
  src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
  integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
  crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>
<?php 
include("baglanti.php");
error_reporting(E_ALL);
if(isset($_POST["isim"],$_POST["tel"],$_POST["email"],$_POST["konu"],$_POST["mesaj"])){
    $adsoyad = $_POST["isim"];
    $telefon = $_POST["tel"];
    $email = $_POST["email"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];
    $ekle = "INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."', '".$telefon."','".$email."','".$konu."','".$mesaj."')";


if($baglan->query($ekle) === TRUE){
    
    echo "<script>alert('Mesajınız başarıyla gönderilmiştir.')</script>";
}
else{
    echo "<script>alert('Mesajınız gönderilirken bir hata oluştu.')</script>";
}
}

?>