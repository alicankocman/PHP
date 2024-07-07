# PHP Dökümantasyonu

## Giriş
PHP (Hypertext Preprocessor), sunucu tarafında çalışan ve özellikle web geliştirme için tasarlanmış bir programlama dilidir. Dinamik web sayfaları oluşturmak için yaygın olarak kullanılır ve HTML ile kolayca entegre edilebilir.

## Kurulum
PHP'yi sisteminize kurmak için çeşitli yollar vardır. Yaygın yöntemler arasında XAMPP, WAMP ve MAMP gibi paketlerin kullanımı bulunmaktadır.

### XAMPP Kullanarak Kurulum
1. [XAMPP](https://www.apachefriends.org/index.html) web sitesinden işletim sisteminize uygun versiyonu indirin.
2. Kurulum dosyasını çalıştırın ve adımları takip ederek XAMPP'yi kurun.
3. XAMPP Kontrol Paneli'ni açın ve Apache ile MySQL servislerini başlatın.

### Manuel Kurulum
1. [PHP'nin resmi web sitesinden](https://www.php.net/downloads) PHP dosyalarını indirin.
2. PHP dosyalarını sisteminize uygun bir dizine çıkarın.
3. PHP'nin çalıştığından emin olmak için komut satırında `php -v` komutunu çalıştırın.

## Temel Söz Dizimi
PHP kodu, `<?php ... ?>` etiketleri arasında yazılır. Temel bir PHP dosyası şu şekilde görünür:
<?php
echo "Merhaba Dünya!";
?>

## Değişkenler
PHP'de değişkenler $ işareti ile tanımlanır.
<?php
$isim = "Ali";
$yas = 25;
echo "İsim: $isim, Yaş: $yas";
?>

## Veri Tipleri
PHP'de yaygın olarak kullanılan veri tipleri şunlardır:
# String
# Integer
# Float
# Boolean
# Array
# Object
# NULL

## Diziler
PHP'de diziler, birden fazla değeri tek bir değişkende saklamak için kullanılır.
<?php
$meyveler = array("Elma", "Armut", "Muz");
echo $meyveler[0]; // Elma
?>

## Koşul İfadeleri
<?php
$sayi = 10;

if ($sayi > 0) {
    echo "Pozitif sayı";
} elseif ($sayi < 0) {
    echo "Negatif sayı";
} else {
    echo "Sıfır";
}
?>

## Döngüler
PHP'de döngüler, tekrarlı işlemleri gerçekleştirmek için kullanılır.
<?php
// for döngüsü
for ($i = 0; $i < 5; $i++) {
    echo "Sayı: $i\n";
}

// while döngüsü
$i = 0;
while ($i < 5) {
    echo "Sayı: $i\n";
    $i++;

// foreach döngüsü
$renkler = array("Kırmızı", "Yeşil", "Mavi");
foreach ($renkler as $renk) {
    echo "Renk: $renk\n";
}
?>

## Fonksiyonlar
Fonksiyonlar, belirli bir görevi yerine getiren kod bloklarıdır.
<?php
function topla($a, $b) {
    return $a + $b;
}

$sonuc = topla(5, 10);
echo "Toplam: $sonuc";
?>

## Form İşleme
PHP, HTML formlarından veri almak için kullanılır.
<!-- HTML Form -->
<form action="islem.php" method="post">
    İsim: <input type="text" name="isim"><br>
    Yaş: <input type="text" name="yas"><br>
    <input type="submit">
</form>
<?php
// islem.php
$isim = $_POST['isim'];
$yas = $_POST['yas'];
echo "İsim: $isim, Yaş: $yas";
?>

## Veritabanı Bağlantısı
PHP, MySQL gibi veritabanları ile etkileşimde bulunabilir.
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veritabani";

// Bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT id, isim, yas FROM kullanicilar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Verileri çıktıla
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - İsim: " . $row["isim"]. " - Yaş: " . $row["yas"]. "<br>";
    }
} else {
    echo "0 sonuç";
}
$conn->close();
?>

## Sonuç
PHP, dinamik web sayfaları oluşturmak için güçlü ve esnek bir dildir. Temel bilgilerle başlamak, ileri düzey PHP özelliklerini öğrenmek için sağlam bir temel oluşturur.
Bu dökümantasyon, PHP'nin temel özelliklerini ve kullanımını kapsayan başlangıç düzeyinde bir kılavuz niteliğindedir. Daha ileri konular için PHP'nin resmi dökümantasyonunu inceleyebilirsiniz.



