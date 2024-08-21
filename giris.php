<html>
<head>
<meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="arkaplan.css">
</head>

<body>



<header>
        <h2 class="logo">Giriş</h2>
        

      </header>















<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>





</html>




<?php

$a=$_POST["ad"];
$adii=221210581;
$adiii="@sakarya.edu.tr";

$adi="b";


 if($a==$adi.$adii.$adiii) 
{ 
   
}
 
 else
{
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    header("Location: ".$url);
    
} 

$b=$_POST["sifre"];
$sifre="b";
$sifree=221210581; 
 if($b==$sifre.$sifree) 
 {

  echo "hosgeldiniz   ".$sifre.$sifree." Ana Sayfaya gitmek icin yandaki yaziya tiklayabilirsiniz. ".".<br>";
  echo "<a href='anasayfa.html'>ana sayfa</a>";
 
  } 
  else
 {
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    header("Location: ".$url);
 }







?>




