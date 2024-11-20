<?php
    if (isset ($_POST['simpan'])) {

        $nama = $_POST['nama'];
        $kelas1 = $_POST['kelas1'];
        $kelas2 = $_POST['kelas2'];
        $kelas3 = $_POST['kelas3'];
        // $jurusan = $_POST['jurusan']; (Gk Dipake biarin aja)
        $indo = $_POST['indo'];
        $inggris = $_POST['inggris'];
        $mtk = $_POST['mtk'];
        $prod = $_POST['prod'];

        $Rata = $indo + $inggris + $mtk + $prod;
        $Rata /=4;


        // Output
        echo "<center>";
            echo "<table>";
                echo "<tr>";
                    echo "<td> Nama </td>";
                    echo "<td> : </td>";
                    echo "<td> $nama </td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> Jurusan </td>";
                    echo "<td> : </td>";
                    echo "<td>";

                    if ($kelas2 == "RPL") {
                        echo "Rekayasa Perangkat Lunak";
                    }

                    else if ($kelas2 == "TBSM"){
                        echo "Teknik dan Bisnis Sepeda Motor";
                    }
            
                    else{
                        echo "Teknik Kendaraan Ringan Otomotif";
                    }

                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> Kelas </td>";
                    echo "<td> : </td>";
                    echo "<td> $kelas1 $kelas2 $kelas3</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> Nilai B.Indo </td>";
                    echo "<td> :  </td>";
                    echo "<td> $indo </td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> Nilai B.Inggris </td>";
                    echo "<td> : </td>";
                    echo "<td> $inggris </td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> Nilai Matematika </td>";
                    echo "<td> : </td>";
                    echo "<td> $mtk </td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> Nilai Produktif </td>";
                    echo "<td> : </td>";
                    echo "<td> $prod </td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> Rata-Rata </td>";
                    echo "<td> : </td>";
                    echo "<td> $Rata </td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> Status </td>";
                    echo "<td> : </td>";
                    echo "<td>";

                    if ($Rata > 75) {
                        echo "Lulus";
                    }

                    else{
                        echo "Tidak Lulus";
                    }

                    echo "</td>";
                echo "</tr>";
            echo "</table>";
        echo "</center>";
    }

?>