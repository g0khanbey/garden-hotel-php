<?php
// Veritabanı bağlantısı
$servername = "localhost"; // Sunucu adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$database = "otobussatis"; // Veritabanı adı

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Formdan gönderilen verileri alma
$email = $_GET['email']; // Formdaki e-posta alanından alınan değer
$password = $_GET['password']; // Formdaki şifre alanından alınan değer

// SQL sorgusu oluşturma
$sql = "SELECT * FROM kullanicilar WHERE  email = '$email' AND parola = '$password'";

// Sorguyu çalıştırma
$result = $conn->query($sql);

// Kullanıcı var mı yok mu kontrol etme
if ($result->num_rows > 0) {
    session_start(); // Oturum başlatma
    $_SESSION['giris'] = true;
    $_SESSION["email"] = $email;
    $_SESSION["parola"] = $parola;
    // Eğer kullanıcı varsa, giriş başarılı
    Header("Location: index.php?durum=yes");
     // Oturum değişkenine giriş yapıldığını kaydetme

        
} else {
    // Eğer kullanıcı yoksa, hata mesajı gösterme
    Header("Location: login.php?durum=no");
        exit();
}

// Veritabanı bağlantısını kapatma

?>