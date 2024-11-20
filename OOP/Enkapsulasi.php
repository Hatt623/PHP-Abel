<?php
    class Contoh{
        private $Nama = "Abel";

        public function Perkenalan() {
            echo "Assalamualaikum <br>";
            echo "<b>" .  $this->Nama . "</b>";

        }

    }

    $Print = new Contoh();

    echo $Print->Perkenalan();
    echo "<br>";
    echo "<hr>";
    echo "<h2> pasti akan error karena propertynya Private/Protected. KECUALI bila dialihkan</h2>";
    echo $Print->Nama;

?>