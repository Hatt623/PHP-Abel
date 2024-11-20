<?php
    function Perkenalkan(){
        echo "Perkenalkan Nama saya Abel <br>";
        echo "Saya hidup di Bumi wkwkwkwk <br>";
        echo "Kesibukan saya sekarang adalah sebagai siswa di SMK Assalaam Bandung";

    }

    Perkenalkan();


    echo "<hr>";
    echo "<h2> Function dengan parameter </h2>";
    
    // mmbuat fungsi
    function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/> <br>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Nabeel", "Hallo");


    $saya = "Muhammad";
    $ucapanSalam = "Selamat pagi";
    // memanggilnya lagi
    perkenalan($saya, $ucapanSalam);


    echo "<hr>";
    echo "<h2> Function dengan Nilai Default </h2>";

    // mmbuat fungsi
    function Kenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/> <br>";
    }

    // memanggil fungsi yang sudah dibuat
    Kenalan("Nabeel", "Hallo");

    $saya = "Muhammad";
    $ucapanSalam = "Selamat pagi";
    // memanggilnya lagi tanpa mengisi parameter salam
    Kenalan($saya);


    echo "<hr>";
    echo "<h2> Function dengan Megembalikan Nilai</h2>";

    // membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
    }

    echo "Umur saya adalah ". hitungUmur(2008, 2024) ." tahun";

    echo "<hr>";
    echo "<h2> Memangil Fungsi di dalam Fungsi </h2>";

    function Umur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function Greeting($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Umur saya adalah ". Umur(2008, 2024) ." tahun";
        echo "Senang berkenalan dengan anda<br/> <br>";
    }

    Greeting("Nabeel");

    echo "<hr>";
    echo " <center> <h1> TUGAS </h1> </center>";

    function Kenalin(){
        echo "Perkenalkan nama saya Muhammad Nabeel Hikaru Athaillah <br>";
        
    }

    
    function Hobi(){
        $ListHobi = [
            "Dengerin Musik",
            "Main Gitar",
            "Main Game"

        ];

        echo "Hobi saya Adalah: ";
        foreach ($ListHobi as $Hobi) {
            echo "<ul><li> ";
            echo $Hobi;
            echo "</li></ul>";
        }

    }

    function Cita2(){
        echo "Cita cita menjadi kapal selam <br><br>";

    }

    function DataOrtu(){
        $Ortu = [
            [
                "Nama" => "Ir*****",
                "Jenis_Kelamin" => "Wanita",
                "Kerja" => "Pegawai Bank"
            ],
    
            [
                "Nama" => "So****",
                "Jenis_Kelamin" => "Pria",
                "Kerja" => "Tim Fismed"
            ]
    
        ];

        echo "<b> Ini adalah Data data Ortu saya: <br><br> </b>";
    
        foreach ($Ortu as $Data){
            echo "Nama :" . $Data["Nama"] . "<br>";
            echo "Jenis Kelamin :" . $Data["Jenis_Kelamin"] . "<br>";
            echo "Kerja :" . $Data["Kerja"] . "<br>";
            echo "<hr>";
        }
        
    }

    Kenalin();
    Hobi();
    Cita2();
    DataOrtu();

?>