<?php
    // $Indikator = 3;

    // switch ($Indikator) {
    //     case 1:
    //         echo "Silahkan Jalan $Indikator";
    //         break;

    //     case 2:
    //         echo "Silahkan Jalan $Indikator";
    //         break;

    //     case 2:
    //         echo "Silahkan Jalan $Indikator";
    //         break;

    //     case 3:
    //         echo "Silahkan Jalan $Indikator";
    //         break;
        
    //     default:
    //         echo "Tidak ada Lantai $Indikator";
    //         break;
    // }


    $Indikator = "Hijau";

    switch ($Indikator) {
        case 'Hijau':
            echo "Silahkan Jalan ";
            break;

        case 'Kuning':
            echo "Silahkan Siaga ";
            break;

        case 'Merah':
            echo "Mohon berhenti ";
            break;

        default:
            echo "Tidak ada warna $Indikator";
            break;
    }

?>