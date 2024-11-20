<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan-4</title>
    </head>

    <body>
        <center>
            <h2>Nilai Ujian Nasional</h2>
            <form action="hasilL4.php" method="post">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="" required></td>
                    </tr>

                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>
                            <select name="kelas1" id="kelas1" required>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                            </select>

                            <select name="kelas2" id="kelas2" required>
                                    <option value="RPL">RPL</option>
                                    <option value="TBSM">TBSM</option>
                                    <option value="TKRO">TKRO</option>
                            </select>

                            <input type="number" name="kelas3" id="kelas3" min="1" max="5" >
                        </td>
                    </tr>

                    <!-- Gk dipake (Biarin aja) -->
                    <!-- <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan" id="jurusan" required>
                                <option value="TBSM">TBSM</option>
                                <option value="RPL">RPL</option>
                                <option value="TKRO">TKRO</option>
                            </select>
                        </td>
                    </tr> -->

                    <tr>
                        <td><br></td>
                        <!-- Space -->
                    </tr>

                    <tr>
                        <td><b>Nilai Ujian</b></td>
                    </tr>

                    <tr>
                        <td>Nilai B.Indo</td>
                        <td>:</td>
                        <td><input type="number" name="indo" value="" min="1" max="100" required></td>
                    </tr>

                    <tr>
                        <td>Nilai B.Inggris</td>
                        <td>:</td>
                        <td><input type="number" name="inggris" value="" min="1" max="100" required></td>
                    </tr>

                    <tr>
                        <td>Nilai Matematika</td>
                        <td>:</td>
                        <td><input type="number" name="mtk" value="" min="1" max="100" required></td>
                    </tr>

                    <tr>
                        <td>Nilai Produktif</td>
                        <td>:</td>
                        <td><input type="number" name="prod" value="" min="1" max="100" required></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="simpan" value="simpan"></td>
                    </tr>

                </table>

                <br>
                <br>
            </form>
        </center>
        
    </body>
</html>


            <!-- echo "<tr>";
                echo "<td>  </td>";
                echo "<td>  </td>";
                echo "<td>  </td>";
            echo "</tr>"; -->

