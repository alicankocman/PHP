<?php
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "password";
$vt_adi = "test";


$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if ($baglan) {
    echo "Veritabanı bağlantısı başarılı<br>";
} else {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $baglan->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

if ($stmt->execute()) {
    echo "Veri eklendi<br>";
} else {
    echo "Veri eklenemedi: " . $stmt->error;
}


$stmt->close();
$baglan->close();
?>
