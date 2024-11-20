<?php
// From petanikodeeeeeeeeeeeeeeeee.com

    // 1 
    echo "<h1>Array Assosiatif Versi []</h1>";
    $ATM = [
        "Money1" => 100,
        "Money2" => 200,
        "Money3" => 300

    ];

    echo $ATM["Money1"];

    echo"<hr>";

    // 2
    echo "<h1>Array Versi ()</h1>";
    $Buah = array(
        "Apel",
        "Bananan",
        "Semangka"

    );

    echo $Buah[1];

    echo"<hr>";

    // 3
    echo "<h1>Array & pengulangan For</h1>";
    $Buku = [
        "Buku IPA",
        "Buku MTK",
        "BUku Inggris"
    ];

    for ($i=0; $i < count($Buku) ; $i++) { 
        echo $Buku[$i] . "<br>";
    }

    echo"<hr>";

    // 4
    echo "<h1>Array & pengulangan Foreach</h1>";
    $Kelas = [
        "XI RPL 1",
        "XI RPL 2",
        "XI RPL 3"
    ];

    foreach ($Kelas as $RPL ) {
        echo "Selamat datang di kelas &nbsp" . $RPL . "<br>";
    }

    echo "<hr>";    
    // 5
    echo "<h1>Array Dua Dimensi</h1>";
    
    $matrik = [
        [2,3,4],
        [7,5,0],
        [4,3,8]
    ];

    echo $matrik[0][2]; //-> output: 4

?>