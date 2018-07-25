<?php

require_once('library.php');//Librar.php dosyamızı dahil ederiz.

$dosya = file_get_contents('database.txt'); //database.txt'de dosyasındaki içerikleri $dosya değikenine aktar.
//file_get_contens = Dosyanın içeriği bize aynen okur.

$Satirlar = explode("\n",$dosya); //$dosya değişkeninde enter'a basılan yerlere göre parçala ve satirlara aktar.


IsimKarti($Satirlar[27]); //IsimKarti fonksiyonumuzu çağırdık ve $satirlar değişkeninin 27. key(anahtarını) okuduk.
IsimKarti($Satirlar[4796]);
IsimKarti($Satirlar[4822]);
IsimKarti($Satirlar[6157]);
IsimKarti($Satirlar[4868]);


$Anlamlar = array(); // Boş bir dizi hazırlar
$Cinsiyetler = array(); // Boş bir dizi hazırlar
foreach ($Satirlar as $satir) { //$satirlar'daki bilgileri tek tek dizi halinde oku  ve $satir yaz.
  list($isim, $anlami, $cinsiyet) = isimayir($satir); //isimayir fonksiyonunu çağırdık ve $satir değişkenine gerekli komutları uyguladıktan sonra lise komutu ile dizi haline getirdik.
  if($cinsiyet != "") { //Cinsiyet boş değilse alt satırı uygula.
    $Anlamlar[$isim] = $anlami; // $Anlamlar dizisinin anahtarını $isim yap ve Value(DEĞER) sunu $anlami yap.
    $Cinsiyetler[$isim] = $cinsiyet;  // $Cinsiyetler dizisinin anahtarını $isim yap ve Value(DEĞER) sunu $cinsiyet yap.
  }
}

DD($Cinsiyetler); //DD fonksiyonunu çağırır ve $Cinsiyetler dizisini ekrana yazdırmamızı sağlar.
DD($Anlamlar);  //DD fonksiyonunu çağırır ve $Anlamlar dizisini ekrana yazdırmamızı sağlar.




?>
