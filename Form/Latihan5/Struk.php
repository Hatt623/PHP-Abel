<?php
if (isset($_POST['Proses'])) {
    $No = $_POST['No'];
    $Nama = $_POST['Nama'];
    $Unit = $_POST['Unit'];
    $Tanggal = $_POST['Tanggal'];
    $Jabatan = $_POST['Jabatan'];
    $BPJS = $_POST['BPJS'];
    $Lama = $_POST['Lama'];
    $Pinjaman = $_POST['Pinjaman'];
    $Status = $_POST['Status'];
    $Tabungan = $_POST['Tabungan'];
    $Lainnya = $_POST['Lainnya'];

    $Bonus1 = 1000000;
    $Bonus2 = 500000;

    $Potongan = $BPJS + $Pinjaman + $Tabungan + $Lainnya;
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <center>
        <h2>Struk Gaji</h2>
        <div class="card text-primary bg-light border-primary mb-3" style="max-width: 40rem;">
            <div class="card-header text-dark"><?php echo "$Nama"; ?></div>
            <div class="card-body mb-3">
                <!-- Baris 1 -->
                <h2 class="card-title">Info Guru/Karyawan</h2>
                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td>
                            <?php echo "$No"; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <?php echo "$Nama"; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Unit Pendidikan</td>
                        <td>:</td>
                        <td>
                            <?php echo "$Unit"; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Tanggal Gajian</td>
                        <td>:</td>
                        <td>
                            <?php echo "$Tanggal"; ?>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="card-body mb-3">
                <!-- Baris 2 -->
                <h2 class="card-title">Gaji</h2>
                <table>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>
                            <?php echo "$Jabatan"; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Gaji</td>
                        <td>:</td>
                        <td>
                            <?php 
                            // Gaji
                            if ($Jabatan == "Kepala Sekolah") {
                                $Gaji = 10000000;
                                echo number_format ($Gaji);
                            }

                            elseif ($Jabatan == "Wakasek"){
                                $Gaji = 7500000;
                                echo number_format ($Gaji);
                            }

                            elseif ($Jabatan == "Guru"){
                                $Gaji = 5000000;
                                echo number_format ($Gaji);
                            }

                            elseif ($Jabatan == "OB"){
                                $Gaji = 2500000;
                                echo number_format ($Gaji);
                            }


                            else {
                                echo "Error";
                            }
                            
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Lama Kerja</td>
                        <td>:</td>
                        <td>
                            <?php echo "$Lama"; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Tunjangan Lama Kerja</td>
                        <td>:</td>
                        <td>
                            <?php 
                                if ($Lama >= 5) {
                                    echo number_format($Bonus1);
                                }

                                else{
                                    echo "Tidak ada";
                                }
                            
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td>
                            <?php echo "$Status"; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Bonus</td>
                        <td>:</td>
                        <td>
                            <?php
                                if ($Status == "Tetap") {
                                    echo number_format($Bonus2);
                                }
                            
                                else {
                                    echo "Tidak ada";
                                }
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td><b>Gaji Kotor</b></td>
                        <td>:</td>
                        <td>
                            <?php
                            // Hitung Gaji Kotor
                            if ($Jabatan == "Kepala Sekolah") {
                                $Gaji = 10000000;
                            
                                if  ($Lama >= 5 && $Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus1 + $Bonus2;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama < 5 && $Status == "Kontrak" ) {
                                    $Kotor = $Gaji + $Bonus2;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus1;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama < 5  ) {
                                    $Kotor = $Gaji;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Jabatan == "Wakasek") {
                                $Gaji = 7500000;
                            
                                if  ($Lama >= 5 && $Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus1 + $Bonus2;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama < 5 && $Status == "Kontrak" ) {
                                    $Kotor = $Gaji + $Bonus2;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus1;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama < 5  ) {
                                    $Kotor = $Gaji;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Jabatan == "Guru") {
                                $Gaji = 5000000;
                            
                                if  ($Lama >= 5 && $Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus1 + $Bonus2;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama < 5 && $Status == "Kontrak" ) {
                                    $Kotor = $Gaji + $Bonus2;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus1;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama < 5  ) {
                                    $Kotor = $Gaji;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Jabatan == "OB") {
                                $Gaji = 2500000;
                            
                                if  ($Lama >= 5 && $Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus1 + $Bonus2;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama < 5 && $Status == "Kontrak" ) {
                                    $Kotor = $Gaji + $Bonus2;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus1;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else if ($Lama < 5  ) {
                                    $Kotor = $Gaji;
                            
                                    echo number_format($Kotor);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }
                            
                            ?>
                        </td>
                    </tr>
                    
                </table>
            </div>

            <div class="card-body mb-3">
                <!-- Baris 1 -->
                <h2 class="card-title">Potongan</h2>
                <table>
                    <tr>
                        <td>BPJS</td>
                        <td>:</td>
                        <td>
                            <?php echo number_format ($BPJS); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Pinjaman</td>
                        <td>:</td>
                        <td>
                            <?php echo number_format ($Pinjaman); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Tabungan</td>
                        <td>:</td>
                        <td>
                            <?php echo number_format ($Tabungan); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Lainnya</td>
                        <td>:</td>
                        <td>
                            <?php echo number_format ($Lainnya); ?>
                        </td>
                    </tr>

                    <tr>
                        <td><b>Total Potongan</b></td>
                        <td>:</td>
                        <td>
                        <?php echo number_format ($Potongan); ?>
                        </td>
                    </tr>

                    <!-- Baris 4 -->

                    <tr>
                        <td colspan = 3 align="center" >
                            <h2>Total</h2>
                        </td>

                    </tr>

                    <tr>
                        <td colspan = 3>
                            <?php
                            echo "<b> Gaji Bersih:  </b>";
                            // Hitung Gaji Bersih
                            if ($Jabatan == "Kepala Sekolah") {
                                $Gaji = 10000000;
                            
                                if  ($Lama >= 5 && $Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus1 + $Bonus2;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama < 5 && $Status == "Kontrak" ) {
                                    $Kotor = $Gaji + $Bonus2;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus1;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama < 5  ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan; 
                            
                                    echo number_format($Bersih);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Jabatan == "Wakasek") {
                                $Gaji = 7500000;
                            
                                if  ($Lama >= 5 && $Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus1 + $Bonus2;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama < 5 && $Status == "Kontrak" ) {
                                    $Kotor = $Gaji + $Bonus2;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus1;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama < 5  ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan; 
                            
                                    echo number_format($Bersih);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Jabatan == "Guru") {
                                $Gaji = 5000000;
                            
                                if  ($Lama >= 5 && $Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus1 + $Bonus2;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama < 5 && $Status == "Kontrak" ) {
                                    $Kotor = $Gaji + $Bonus2;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus1;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama < 5  ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan; 
                            
                                    echo number_format($Bersih);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }

                            else if ($Jabatan == "OB") {
                                $Gaji = 2500000;
                            
                                if  ($Lama >= 5 && $Status == "Tetap") {
                                    $Kotor = $Gaji + $Bonus1 + $Bonus2;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama < 5 && $Status == "Kontrak" ) {
                                    $Kotor = $Gaji + $Bonus2;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama >= 5 ) {
                                    $Kotor = $Gaji + $Bonus1;
                                    $Bersih = $Kotor - $Potongan;
                            
                                    echo number_format($Bersih);
                                }
                            
                                else if ($Lama < 5  ) {
                                    $Kotor = $Gaji;
                                    $Bersih = $Kotor - $Potongan; 
                            
                                    echo number_format($Bersih);
                                }
                            
                                else{
                                    echo"Error";
                                }
                            }
                            
                            ?>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>