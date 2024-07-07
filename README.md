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

```php
<?php
echo "Merhaba Dünya!";
?>
