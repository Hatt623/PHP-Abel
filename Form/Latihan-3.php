<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 3</title>
    </head>

    <body>
        <center>
            <img src="SMK.png" width="300px" alt="">
            <h2>Form Biodata Diri</h2>
            <form method="post">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value= "" required></td>
                    </tr>

                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="lahir" value= "" required></td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tgl_lahir" value= "" required></td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" id="Pria" name="gender" value= "Pria" required>
                            <label for="Pria">Pria</label>
                        
                            <input type="radio" id="Perempuan" name="gender" value= "Perempuan" required>
                            <label for="Perempuan">Perempuan</label>
                        </td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" id="alamat" rows="5px" value="" required></textarea></td>
                    </tr>

                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select name="agama" id="agama" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>:</td>
                        <td>
                            <select name="sekolah" id="sekolah" required>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            <select name="status" id="status" required>
                                <option value="Sudah Menikah">Sudah Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" name="hobi" id="membaca " value="Membaca" >
                                <label for="Membaca">Membaca</label>

                            <input type="checkbox" name="hobi" id="Menulis" value="Menulis" >
                                <label for="Menulis">Menulis</label>

                            <input type="checkbox" name="hobi" id="Ngepush" value="Ngepush" >
                                <label for="Ngepush">Ngepush</label>

                            <input type="checkbox" name="hobi" id="Ngepush" value="Lainnya"   >
                                <label for="Lainnya">Lainnya</label>
                        </td>
                    </tr>

                    <tr>
                        <td>Cita-Cita</td>
                        <td>:</td>
                        <td>
                            <select name="cita" id="cita" required>
                                <option value="programmer">Programmer</option>
                                <option value="mekanik">mekanik</option>
                                <option value="kapal laud">Kapal Laud</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Kata-kata Bijak</td>
                        <td>:</td>
                        <td><textarea name="bijak" id="bijak" rows="5px" value="" required></textarea></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="kirim" value="Kirim"></td>
                    </tr>

                </table>
            </form>
        </center>
        
    </body>
</html>

<?php
if (isset ($_POST['kirim'])) {

    $nama = $_POST ['nama'];
    $lahir = $_POST ['lahir'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $gender = $_POST ['gender'];
    $alamat = $_POST ['alamat'];
    $agama = $_POST ['agama'];
    $sekolah = $_POST ['sekolah'];
    $status = $_POST ['status'];
    $hobi = isset($_POST['hobi']) ? $_POST ['hobi'] : null;
    $cita = $_POST ['cita'];
    $bijak = $_POST ['bijak'];

    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $lahir <br>";
    echo "Tanggal Lahir : $tgl_lahir <br>";
    echo "Jenis Kelamin : $gender <br>";
    echo "Alamat : $alamat <br>";
    echo "Agama : $agama <br>";
    echo "Pendidikan Terakhir : $sekolah <br>";
    echo "Status : $status <br>";
    echo "Hobi : $hobi <br>";
    echo "Cita-Cita : $cita <br>";
    echo "Kata-kata Bijak : $bijak";


}

?>