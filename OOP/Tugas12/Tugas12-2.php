<?php
    if (isset($_POST['Submit'])) {
        // Data diri calon
        $Jurusan = $_POST['Jurusan'];
        $Nama = $_POST['Nama'];
        $JK = $_POST['Gender'];
        $Tempat = $_POST['Tempat'];
        $Tanggal = $_POST['Tanggal'];
        $SHP = $_POST['SHP'];
        $Email = $_POST["Email"];

        // Alamat Calon
        $Provinsi = $_POST['Provinsi'];
        $Kab = $_POST['Kabupaten'];
        $Kec = $_POST['Kecamatan'];
        $Desa = $_POST['Desa'];
        $SAlamat = $_POST['SAlamat'];
        $KodeP = $_POST['KodeP'];

        // Data asal Sekolah
        $Sekolah = $_POST['Sekolah'];
        $SeAlamat = $_POST['SeAlamat'];

        // Data Ortu
        $Guardian = $_POST['Guardian'];
        $OrtuNama = $_POST['OrtuNama'];
        $Pekerjaan = $_POST['Pekerjaan'];
        $OHP = $_POST['OHP'];
        $OAlamat = $_POST['OAlamat'];

        class Data{
             //  Data Diri Calon
            public $Jurusan;
            public $Nama;
            public $JK;
            public $Tempat;
            public $Tanggal;
            public $SHP;
            public $Email;

            //  Alamat Calon
            public $Provinsi;
            public $Kab;
            public $Kec;
            public $Desa;
            public $SAlamat;
            public $KodeP;

            //  Data Asal Sekolah
            public $Sekolah;
            public $SeAlamat;

            //  for Data Ortu
            public $Guardian;
            public $OrtuNama;
            public $Pekerjaan;
            public $OHP;
            public $OAlamat;
            
            public function Calon($Jurusan2, $Nama2, $JK2, $Tempat2, $Tanggal2, $SHP2, $Email2){
                $this->Jurusan = $Jurusan2;
                $this->Nama = $Nama2;
                $this->JK = $JK2;
                $this->Tempat = $Tempat2;
                $this->Tanggal = $Tanggal2;
                $this->SHP = $SHP2;
                $this->Email = $Email2;
            }

            public function Alamat($Provinsi2, $Kab2, $Kec2, $Desa2, $SAlamat2, $KodeP2){
                $this->Provinsi = $Provinsi2;
                $this->Kab = $Kab2;
                $this->Kec = $Kec2;
                $this->Desa = $Desa2;
                $this->SAlamat = $SAlamat2;
                $this->KodeP = $KodeP2;
            }

            public function Asal($Sekolah2,$SeAlamat2){
                $this->Sekolah = $Sekolah2;
                $this->SeAlamat = $SeAlamat2;
                
            }

            public function Ortu($Guardian2, $OrtuNama2, $Pekerjaan2, $OHP2, $OAlamat2){
                $this-> Guardian = $Guardian2;
                $this-> OrtuNama = $OrtuNama2;
                $this-> Pekerjaan = $Pekerjaan2;
                $this-> OHP = $OHP2;
                $this-> OAlamat = $OAlamat2;
            }

        }

        $Print = new Data();

        $Print->Calon($Jurusan, $Nama, $JK, $Tempat, $Tanggal, $SHP, $Email);
        $Print->Alamat($Provinsi, $Kab, $Kec, $Desa, $SAlamat, $KodeP);
        $Print->Asal($Sekolah,$SeAlamat);
        $Print->Ortu($Guardian, $OrtuNama, $Pekerjaan, $OHP, $OAlamat);

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

    <style>
         .card{
            margin: auto;
        }
    </style>
    <title></title>
  </head>

  <body>
    <center>
        <div class="card text-primary bg-light border-primary mb-3" style="max-width: 40rem;">
            <div class="card-header text-dark"></div>
            <div class="card-body mb-3">
                <!-- Baris 1 -->
                <h2 class="card-title">Data Diri Calon Pendaftar</h2>
                <table>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><?php echo $Print->Jurusan; ?></td>
                    </tr>

                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $Print->Nama; ?></td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $Print->JK; ?></td>
                    </tr>

                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><?php echo $Print->Tempat; ?></td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><?php echo $Print->Tanggal; ?></td>
                    </tr>

                    <tr>
                        <td>Nomor HP Siswa</td>
                        <td>:</td>
                        <td><?php echo $Print->SHP; ?></td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $Print->Email; ?></td>
                    </tr>
                    
                </table>
            </div>

            <div class="card-body mb-3">
                <!-- Baris 2 -->
                <h2 class="card-title">Alamat Calon Pendaftar</h2>
                <table>
                    <tr>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td> <?php echo $Print->Provinsi;?> </td>
                    </tr>

                    <tr>
                        <td>Kab/Kota</td>
                        <td>:</td>
                        <td> <?php echo $Print->Kab;?> </td>
                    </tr>

                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td> <?php echo $Print->Kec;?> </td>
                    </tr>

                    <tr>
                        <td>Desa/Kelurahan</td>
                        <td>:</td>
                        <td> <?php echo $Print->Desa ;?> </td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td> <?php echo $Print->SAlamat ;?> </td>
                    </tr>

                    <tr>
                        <td>kode Pos</td>
                        <td>:</td>
                        <td> <?php echo $Print->KodeP ;?> </td>
                    </tr>
                    
                </table>
            </div>

            <div class="card-body mb-3">
                <!-- Baris 1 -->
                <h2 class="card-title">Data Asal Sekolah</h2>
                <table>
                    <tr>
                        <td>Nama Asal Sekolah</td>
                        <td>:</td>
                        <td> <?php echo $Print->Sekolah; ?> </td>
                    </tr>

                    <tr>
                        <td>Alamat Sekolah </td>
                        <td>:</td>
                        <td> <?php echo $Print->SeAlamat; ?> </td>
                    </tr>

                </table>
            </div>

            <div class="card-body mb-3">
                <!-- Baris 1 -->
                <h2 class="card-title">Data Orang Tua</h2>
                <table>
                    <tr>
                        <td>Nama Orang Tua</td>
                        <td>:</td>
                        <td> <?php echo $Print->Guardian; ?> </td>
                        <td>|</td>
                        <td> <?php echo $Print->OrtuNama; ?> </td>
                    </tr>

                    <tr>
                        <td>Pekerjaan Orang Tua</td>
                        <td>:</td>
                        <td> <?php echo $Print->Pekerjaan; ?> </td>
                    </tr>

                    <tr>
                        <td>Nomor HP Orang Tua</td>
                        <td>:</td>
                        <td> <?php echo $Print->OHP; ?> </td>
                    </tr>

                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td> <?php echo $Print->OAlamat; ?> </td>
                    </tr>

                </table>
            </div>
        </div>
    </center>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>