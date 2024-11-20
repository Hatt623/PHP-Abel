<?php
if (isset($_POST['Submit'])) {
    $Nama = $_POST['Nama'];
    $Kelas = $_POST['Kelas'];
    $Jurusan = $_POST['Jurusan'];

    // MTK
    $MTKHarian = $_POST['MTKHarian'];
    $MTKTugas = $_POST['MTKTugas'];
    $MTKUTS = $_POST['MTKUTS'];
    $MTKUAS = $_POST['MTKUAS'];

    // B Indo
    $IndoHarian = $_POST['IndoHarian'];
    $IndoTugas = $_POST['IndoTugas'];
    $IndoUTS = $_POST['IndoUTS'];
    $IndoUAS = $_POST['IndoUAS'];

    // B Inggris
    $InggrisHarian = $_POST['InggrisHarian'];
    $InggrisTugas = $_POST['InggrisTugas'];
    $InggrisUTS = $_POST['InggrisUTS'];
    $InggrisUAS = $_POST['InggrisUAS'];

    // Jurusan
    $JurusanHarian = $_POST['JurusanHarian'];
    $JurusanTugas = $_POST['JurusanTugas'];
    $JurusanUTS = $_POST['JurusanUTS'];
    $JurusanUAS = $_POST['JurusanUAS'];

    class Kelulusan{
        public $Name;
        public $Class;
        public $Major;

        public $MTKRata;
        public $IndoRata;
        public $InggrisRata;
        public $JurusanRata;

        public $MTK1;
        public $MTK2;
        public $MTK3;
        public $MTK4;

        public $Indo1;
        public $Indo2;
        public $Indo3;
        public $Indo4;

        public $Inggris1;
        public $Inggris2;
        public $Inggris3;
        public $Inggris4;

        public $Jurusan1;
        public $Jurusan2;
        public $Jurusan3;
        public $Jurusan4;

        public function Biodata($Name2, $Class2, $Major2){
            $this->Name = $Name2;
            $this->Class = $Class2;
            $this->Major = $Major2;
            
        }

        public function MTK($MTKHarian2, $MTKTugas2, $MTKUTS2, $MTKUAS2){
            $this->MTK1 = $MTKHarian2;
            $this->MTK2 = $MTKTugas2;
            $this->MTK3 = $MTKUTS2;
            $this->MTK4 = $MTKUAS2;

            $Rata = $MTKHarian2 + $MTKTugas2 + $MTKUTS2 + $MTKUAS2;
            $this->MTKRata = $Rata / 4;
            
        }

        public function Indo($IndoHarian2, $IndoTugas2, $IndoUTS2, $IndoUAS2){
            $this->Indo1 = $IndoHarian2;
            $this->Indo2 = $IndoTugas2;
            $this->Indo3 = $IndoUTS2;
            $this->Indo4 = $IndoUAS2;

            $Rata = $IndoHarian2 + $IndoTugas2 + $IndoUTS2 + $IndoUAS2;
            $this->IndoRata = $Rata / 4;
            
        }

        public function Inggris($InggrisHarian2, $InggrisTugas2, $InggrisUTS2, $InggrisUAS2){
            $this->Inggris1 = $InggrisHarian2;
            $this->Inggris2 = $InggrisTugas2;
            $this->Inggris3 = $InggrisUTS2;
            $this->Inggris4 = $InggrisUAS2;

            $Rata = $InggrisHarian2 + $InggrisTugas2 + $InggrisUTS2 + $InggrisUAS2;
            $this->InggrisRata = $Rata / 4;
            
        }

        public function Jurusan($JurusanHarian2, $JurusanTugas2, $JurusanUTS2, $JurusanUAS2){
            $this->Jurusan1 = $JurusanHarian2;
            $this->Jurusan2 = $JurusanTugas2;
            $this->Jurusan3 = $JurusanUTS2;
            $this->Jurusan4 = $JurusanUAS2;

            $Rata = $JurusanHarian2 + $JurusanTugas2 + $JurusanUTS2 + $JurusanUAS2;
            $this->JurusanRata = $Rata / 4;
            
        }

        public function __destruct(){
            function Grade($Grade) {
                if ($Grade >= 90) {
                    return "A";}

                elseif ($Grade >= 80) {
                    return "B";}

                elseif ($Grade >= 70) {
                    return "C";}

                elseif ($Grade >= 60) {
                    return "D";}

                else {
                    return "E";
                } 
            }
            

            echo "Nama : " . $this->Name . "<br>";
            echo "Kelas :" . $this->Class . "<br>";
            echo "Jurusan :" . $this->Major . "<br>";

            echo "<table border='1'>";
                echo "<tr>";
                    echo "<td colspan = '7'>";
                        echo "<h2 align='center'> Data Rapot Siswa </h2>";

                    echo "</td>";

                echo "</tr>";

                echo "<tr>";
                    echo "<td>";
                        echo "Mapel";
                    echo "</td>";

                    echo "<td>";
                        echo "Harian";
                    echo "</td>";

                    echo "<td>";
                        echo "Tugas";
                    echo "</td>";

                    echo "<td>";
                        echo "UTS";
                    echo "</td>";

                    echo "<td>";
                        echo "UAS";
                    echo "</td>";

                    echo "<td>";
                        echo "Rata-Rata";
                    echo "</td>";

                    echo "<td>";
                        echo "Grade";
                    echo "</td>";
                    

                echo "</tr>";

                echo "<tr>";
                    echo "<td>";
                            echo "Matematika";
                    echo "</td>";

                    echo "<td>";
                        echo $this->MTK1;
                    echo "</td>";

                    echo "<td>";
                        echo $this->MTK2;
                    echo "</td>";

                    echo "<td>";
                        echo $this->MTK3;
                    echo "</td>";

                    echo "<td>";
                        echo $this->MTK4;
                    echo "</td>";

                    echo "<td>";
                        echo $this->MTKRata;
                    echo "</td>";

                    echo "<td>";
                        echo Grade($this->MTKRata);
                    echo "</td>";

                echo "</tr>";

                echo "<tr>";
                    echo "<td>";
                            echo "Indonesia";
                    echo "</td>";

                    echo "<td>";
                        echo $this->Indo1;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Indo2;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Indo3;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Indo4;
                    echo "</td>";

                    echo "<td>";
                        echo $this->IndoRata;
                    echo "</td>";

                    echo "<td>";
                        echo Grade($this->IndoRata);
                    echo "</td>";

                echo "</tr>";

                echo "<tr>";
                    echo "<td>";
                            echo "Inggris";
                    echo "</td>";

                    echo "<td>";
                        echo $this->Inggris1;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Inggris2;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Inggris3;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Inggris4;
                    echo "</td>";

                    echo "<td>";
                        echo $this->InggrisRata;
                    echo "</td>";

                    echo "<td>";
                        echo Grade($this->InggrisRata);
                    echo "</td>";

                echo "</tr>";

                echo "<tr>";
                    echo "<td>";
                            echo "Jurusan &nbsp" .  $this->Major;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Jurusan1;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Jurusan2;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Jurusan3;
                    echo "</td>";

                    echo "<td>";
                        echo $this->Jurusan4;
                    echo "</td>";

                    echo "<td>";
                        echo $this->JurusanRata;
                    echo "</td>";

                    echo "<td>";
                        echo Grade($this->JurusanRata);
                    echo "</td>";

                echo "</tr>";

            echo "</table>";
            
        }


    }

    $Print = new Kelulusan();

    $Print->Biodata ($Nama,$Kelas,$Jurusan);

    $Print->MTK ($MTKHarian,$MTKTugas,$MTKUTS,$MTKUAS);
    $Print->Indo ($IndoHarian,$IndoTugas,$IndoUTS,$IndoUAS);
    $Print->Inggris ($InggrisHarian,$InggrisTugas,$InggrisUTS,$InggrisUAS);
    $Print->Jurusan ($JurusanHarian,$JurusanTugas,$JurusanUTS,$JurusanUAS);

}

?>