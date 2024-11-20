<?php
// For
echo "<h2> Penggunaan For </h2>";
for ($i=1; $i <= 5 ; $i++) { 
    echo "<ul>
            <li>
                Ini nomor ke $i 
            </li>
            </ul>";
}

echo "<hr>";

// While
echo "<h2> Penggunaan While </h2>";
$Number = 1;

while ($Number <= 5) {
    echo "<ul>
    <li>
        Ini nomor ke $Number 
    </li>
    </ul>";
    $Number ++;
}

echo "<hr>";

// DO While
echo "<h2> Penggunaan Do While </h2>";
$Nomor = 1;

do {
    echo "<ul>
    <li>
        Ini nomor ke $Nomor 
    </li>
    </ul>";
    $Nomor ++;
} while ($Nomor <= 5);

echo "<hr>";

// Foreach
echo "<h2> Penggunaan Foreach </h2>";
$Class = [
    "Kelas XI RPL 1",
    "Kelas XI RPL 2",
    "Kelas XI RPL 3"

];

echo "<h4> Daftar Kelas XI RPL: </h4>";
echo "<ul>";
    foreach ($Class as $Kelas ) {
        echo "<li> $Kelas </li>";
    }
echo "</ul>";

echo "<hr>";

// Tugas
// For
echo "<h2> (TUGAS) Buatlah Perulangan Mulai dari 10-1 </h2>";
for ($i=10; $i >= 1 ; $i--) { 
    echo "<ul>
            <li>
                Ini nomor ke $i 
            </li>
            </ul>";
}

echo "<hr>";

        


?>