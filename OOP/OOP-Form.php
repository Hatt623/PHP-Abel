<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP Form</title>
    </head>

    <body>
        <center>
            <h2>Menghitung Luas Persegi Panjang</h2>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Panjang</td>
                        <td>:</td>
                        <td> <input type="number" name="Panjang"> </td>

                    </tr>

                    <tr>
                        <td>Lebar</td>
                        <td>:</td>
                        <td> <input type="number" name="Lebar"> </td>

                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td> <input type="submit" name="Hitung" value="HITUNG"> </td>

                    </tr>

                </table>
            </form>

        </center>
        
    </body>
</html>

<?php
    if (isset($_POST['Hitung'])) {
        // Deklarasi variable
        $Panjang = $_POST['Panjang'];
        $Lebar = $_POST['Lebar'];

        class PersegiPanjang{

            public $Luas;

            public function Luas_PersegiPanjang($Panjang2, $Lebar2){
                $this->Luas = $Panjang2 * $Lebar2;

                echo "Panjang : " . $Panjang2 . "<br>";
                echo "Lebar : " . $Lebar2 . "<br>";
                echo "Luasnya : " . $this->Luas . "<br>";
                
            }

        }

        $Print = new PersegiPanjang();
        echo $Print->Luas_PersegiPanjang($Panjang, $Lebar);

    }

?>