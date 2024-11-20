<?php
    $Siswa  = [
        "Dudi", "Hendri", "Regita", "Eva", "Kiki", "Abel", "Ridho", "Fazli","Candra","Ardhika"
    ];

    $Hobi = [
        "Membaca", "Main Game", "Menari", "Memasak", "Nonton", "Main Alat Musik", "Menyanyi", "Berkendara", "Hiking", "Jalan2"

    ];

    $JenisKelamin = [
        "Laki-laki", "Perempuan"

    ];

    echo "$Siswa[0] - $Hobi[0] - $JenisKelamin[0] <br>";
    echo "$Siswa[1] - $Hobi[1] - $JenisKelamin[0] <br>";
    echo "$Siswa[2] - $Hobi[2] - $JenisKelamin[1] <br>";
    echo "$Siswa[3] - $Hobi[3] - $JenisKelamin[1] <br>";
    echo "$Siswa[4] - $Hobi[4] - $JenisKelamin[0] <br>";

    echo "$Siswa[5] - $Hobi[5] - $JenisKelamin[0] <br>";
    echo "$Siswa[6] - $Hobi[6] - $JenisKelamin[0] <br>";
    echo "$Siswa[7] - $Hobi[7] - $JenisKelamin[0] <br>";
    echo "$Siswa[8] - $Hobi[8] - $JenisKelamin[0] <br>";
    echo "$Siswa[9] - $Hobi[9] - $JenisKelamin[0] <br>";

    echo "<hr>";

    foreach ($Siswa as $Data) {
        echo "$Data <br>";
    }

?>