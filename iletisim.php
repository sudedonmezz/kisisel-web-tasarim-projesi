<html>
    <head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="arkaplan.css">

</head>
<body>


<header>
            <h2 class="logo">Giriş</h2>
            <nav class="navigation">
            <a href="anasayfa.html">Ana Sayfa</a>
            <a href="takımımız.html">Takımımız</a>
            <a href="sehrim.html">Şehrim</a>
            <a href="ozgecmis.html">Öz Geçmiş</a>
            <a href="iletisimsayfasi.html">İletişim</a>
          </nav>

    
          </header>













          <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




</body>
    </html>

<?php

$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$numara=$_POST["numara"];
$email=$_POST["email"];
$yaz=$_POST["yaz"];


foreach ($_POST["secmek"] as $select)
{
$select; // Displaying Selected Value
}


?>

<div class="wrapper">
<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded"><h2>Başarıyla İletilmiştir! </h2>
<h2>Ad:<?php echo $ad?></h2>
<h2>Soyad:<?php echo $soyad?></h2>
<h2>Email:<?php echo $email?></h2>
<h2>Telefon Numarasi:<?php echo $numara?></h2>
<h2>İletilen Yazı:<?php echo $yaz ?></h2>

<?php
foreach ($_POST["secmek"] as $select)
{  ?>
<h2>Suradan bilgi almak istiyorum: <?php echo $select ?></h2>
<?php // Displaying Selected Value
}


?>

</div>
</div>



<?php



