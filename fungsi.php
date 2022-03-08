<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal nomor 3</title>
</head>
<body>
    <?php
    // membuat fungsi php
    function pdkt($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Saya kuliah di Universitas Trunojoyo Madura<br/>";
    echo "Prodi teknik informatika<br/>";
    echo "Salam Kenal<br/>";
    }

    // memanggil fungsi yang sudah dibuat sebelumnya
    pdkt("Dewi Imani Al Qur' Ani", "Assalamualaikum Warahmatullahi Wabarakatuh");

    echo "<hr>";

    $saya = "Astia Nurrahmayanti";
    $ucapanSalam = "Waalaikumsalam Warahmatullahi Wabarakatuh";
    // memanggilnya lagi
    pdkt($saya, $ucapanSalam);

    echo "<hr>";
    $friend = "Rizki Ghulam Rosul";
    // memanggil fungsinya lagi
    pdkt($friend, $ucapanSalam);
    ?>

    
</body>
</html>