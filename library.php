<?php

  function DD($diziadi){
    echo "<pre>";
      print_r($diziadi);
    echo "</pre>";
}

function isimayir($isim){
    @list($ad,$anlam1,$anlam2,$anlam3) = explode(':',$isim); //dosya içerisinde : gördüğümüz yerleri parçaladık ve $ad,$anlam1,$anlam2,$anlam3 değişkenlerine aktardık.
    $anlam = "$anlam1 $anlam2 $anlam3"; //bu değişkenleri $anlam diye bir değişkenle birleştirdik.
    $erkek = strpos($anlam,' Er. '); //   anlam değişkeninde artık bir isim ve açıklaması var.O açıklamada  .Er  sözcüğü geçerse o ismin erkek olduğunu anlıyoruz.Burada Er in kaçıncı sırada olduğunu öğrendik.
    $kız = strpos($anlam, ' Ka. ');   //   anlam değişkeninde artık bir isim ve açıklaması var.O açıklamada  .Ka  sözcüğü geçerse o ismin kadın olduğunu anlıyoruz.Burada Ka nın kaçıncı sırada olduğunu öğrendik.
    $uniseks = strpos($anlam, 'Erkek ve kadın adı olarak kullanılır'); //YUkarıda ki satırların aynısı.Erkek ve kadın geçerse uniseks değişkenine atadık.
    $cinsiyet =""; //Cinsiyet adında değişken oluşturduk ve boş(NULL)'a eşitledik.
    if($erkek>0 and $kız=="") $cinsiyet='Erkek';  //Eğer er varsa anlam değişkeninde 0 dan büyük bir yerde olacağı için Erkek olduğunu anlarız.
    if($erkek=="" and $kız>0) $cinsiyet='Kız';  //Eğer Ka varsa anlam değişkeninde 0 dan büyük bir yerde olacağı için Erkek olduğunu anlarız.
    if($uniseks>0) $cinsiyet='Uniseks';
    return array($ad,$anlam,$cinsiyet); //ad anlam ve cinsiyet değişkenleri dizi şeklinde geri döndürdük.

}



  function IsimKarti($SATIR) {  //İsim karti adında bir fonksiyon oluşturduk ve bir paretmetre alacağını belirttik.Adını $SATIR koyduk.
    list($isim, $anlami, $cinsiyet) = isimayir($SATIR); //isimayir fonksiyonunu çağırdık ve $satırdan gelen bilgileri isimayira yolladı.Gerekli işlemleri yaptıktan sonra dizi şeklinde $isim,$anlami,$cinsiyet şeklinde ayırdık.
    if($cinsiyet != "") { //Cinsiyet boş değilse aşağıdaki işlemleri yap.
      echo "Ad: <b>$isim</b><br><br> "; //Ad: yazıp yanına $isim değişkenindeki bilgiyi yaz.
      echo "Anlam: $anlami<br><br>";  //Ad: yazıp yanına $anlami değişkenindeki bilgiyi yaz.
      echo "Kullanımı: $cinsiyet";  //Ad: yazıp yanına $cinsiyet değişkenindeki bilgiyi yaz.
      echo "<hr>"; //Bİlgilerin altına çizgi çek.
      SEOLISTELE($isim);
      echo "<hr>"; //Bİlgilerin altına çizgi çek.


    }
  }

  function SEOLISTELE($AD){ //SEOLISTELE adında bir fonksiyon oluşturduk.
    $AD="<b>$AD</b>"; //$AD fonksiyonumuzu $AD'a eşitledik.<b> etiketini direk olarak uygulayamad
    echo "<p style='font-size:12px'>";
    echo "$AD ne anlama geliyor?";
    echo "$AD ne demek?";
    echo "$AD isminin anlamı?";
    echo "$AD isminin anlamı nedir";
    echo "$AD kelimesinin anlamı nedir";
    echo "$AD nedir?";
    echo "$AD isminin manası nedir?";
    echo "$AD erkek ismi midir?";
    echo "$AD kadın ismi midir?";
    echo "$AD erkek adı midir?";
    echo "$AD kadın adı midir?";
    echo "</p>";
  }


?>
