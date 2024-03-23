<?php
$servername = "localhost"; // Sunucu adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$database = "otobussatis"; // Veritabanı adı

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $database);

if (isset($_POST["kayitol"])) {
    $Tcno = $_POST["TCno"];
    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $dogum = $_POST["dogum"];
    $meslek = $_POST["meslek"];
    $cinsiyet = $_POST["cinsiyet"];
    $Telno = $_POST["Telno"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];

    $kaydet = $conn->prepare("INSERT INTO kullanicilar (TC, Ad, Soyad, DogumTarih, YolcuTarife, Cinsiyet, TelNo, Email, Parola)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$insert = $kaydet->execute(
    array(
        $Tcno,
        $isim,
        $soyisim,
        $dogum,
        $meslek,
        $cinsiyet,
        $Telno,
        $email,
        $parola
    )
);

    if ($insert) {
        header("location:index.php?durum=yes");
    } else {
        header("location:register.php?durum=no");
    }
} else {
    echo "Form gönderimi yapılmadı.";
}
?>