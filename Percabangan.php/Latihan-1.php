<?php
    $Nama = "Dudi Similikiti";
    $Kelas = "XI RPL I";

    $NIndo = 80;
    $NIggris = 70;
    $NMTK = 80;
    $NProd = 90;

    $NTotal = $NIndo + $NIggris + $NMTK + $NProd;

    $NRata = $NTotal / 4;

    echo "<table>";
    echo "<tr> <td> Nama </td> <td> : $Nama <br> </td> </tr>";
    echo "<tr> <td> Kelas </td> <td> : $Kelas <br> </td> </tr>";
    echo "</table>
          <table>";
    echo "<tr> <td> Nilai B.Indonesia </td> <td> : $NIndo <br> </td> </tr>";
    echo "<tr> <td> Nilai B.Inggris </td> <td> : $NIggris <br> </td> </tr>";
    echo "<tr> <td> Nilai Matematika </td> <td> : $NMTK <br> </td> </tr>";
    echo "<tr> <td> Nilai Produktif </td> <td> : $NProd <br> </td> </tr>";
    echo "<tr> <td> Rata-Rata </td> <td> : $NRata <br> </td> </tr>";
    echo " </table> ---------------------------- <br>";
    if ($NRata > 75) {
        echo "Status: * Anda Lulus *";
    }

    else {
        echo "Status: * Anda tidak Lulus *";
    };

    



?>