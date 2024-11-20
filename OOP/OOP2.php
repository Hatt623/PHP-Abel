<?php
    class ppdb{

        public function Data_diri($Jurusan, $Nama_Lengkap, $Jenis_Kelamin,$Tempat_Lahir, $Tanggal_Lahir, $Nomor_HP, $Email ){
            echo "<h3> Data Diri Calon Pendaftar </h3>";
            echo "Jurusan : $Jurusan <br>";
            echo "Nama Lengkap : $Nama_Lengkap <br>";
            echo "Jenis Kelamin : $Jenis_Kelamin <br>";
            echo "Tempat Lahir : $Tempat_Lahir <br>";
            echo "Tanggal Lahir : $Tanggal_Lahir <br>";
            echo "Nomor HP  : $Nomor_HP <br>";
            echo "Email : $Email <br><br>";
            echo "<hr>";

        }

        public function Alamat_Pendaftar($Provinsi, $Kabupaten , $Kecamatan, $Desa, $Alamat, $Kode_pos ) {
            echo "<h3> Alamat Calon Pendaftar </h3>";
            echo "Provinsi : $Provinsi <br>";
            echo "Kabupaten : $Kabupaten <br>";
            echo "Kecamatan : $Kecamatan <br>";
            echo "Desa : $Desa <br>";
            echo "Alamat : $Alamat <br>";
            echo "Kode Pos : $Kode_pos <br><br>";
            echo "<hr>";

        }

        Public function Asal_Sekolah($Asal_sekolah, $Alamat_sekolah) {
            echo "<h3> Data Asal Sekolah </h3>";
            echo "Asal Sekolah : $Asal_sekolah <br>";
            echo "Alamat Sekolah : $Alamat_sekolah <br>";
            echo "<hr>";

        }

        public function Ortu($Ortu, $Kerja, $Nomor_HP, $Alamat) {
            echo "<h3> Data Orang Tua </h3>";
            echo "Nama Lengkap Orang Tua/Wali : $Ortu <br>";
            echo "Pekerjaan Orang Tua : $Kerja <br>";
            echo "Nomor HP Orang Tua : $Nomor_HP <br>";
            echo "Alamat Lengkap : $Alamat <br><br>";
            echo "<hr>";
            
        }

    }

    $print = new ppdb();

    echo $print -> Data_diri("RPL", "Mahmud Sammy", "Pria", "Bandung", "20/02/2007", "08XXXXX", "Mahmud@gmail.com");
    echo $print -> Alamat_Pendaftar("Jawa Barat", "Bandung", "Dayueh Kolot", "Kopo", "Kopo sayati C/20", "4009");
    echo $print -> Asal_Sekolah("Mumtaz", "Karawang, Bobojong");
    echo $print -> Ortu("Mahmud Shauny", "Pegawai bank", "08XXXXXX", "Kopo sayati C/20");

?>
