<?php

$Novel = ' [
        {

            "No" : "101",
            "Judul" : "How to Think Like a Philosopher",
            "Genre" : "Self-Help Book",
            "Penulis" : "Christopher Paolini",
            "Penerbit" : "Bloomsburry UK",
            "Tanggal_rilis" : "3 Okt 2024"
        },

        {
            "No" : "102",
            "Judul" : "The Alchemist",
            "Genre" : "Adventure",
            "Penulis" : "Paulo Coelho",
            "Penerbit" : "HARPER COLLINS UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "103",
            "Judul" : "Before the Coffee Gets Cold",
            "Genre" : "Fantasy Fiction",
            "Penulis" : "Toshikazu Kawaguchi",
            "Penerbit" : "PAN MACMILLAN UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "104",
            "Judul" : "The Women",
            "Genre" : "Domestic Fiction",
            "Penulis" : "Kristin Hannah",
            "Penerbit" : "PAN MACMILLAN UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "105",
            "Judul" : "The Cat Who Saved Books",
            "Genre" : "Fantasy Fiction",
            "Penulis" : "SOSUKE NATSUKAWA",
            "Penerbit" : "Penguin UK",
            "Tanggal_rilis" : "3 Okt 2024"
        },

        {
            "No" : "106",
            "Judul" : "Before We Say Goodbye",
            "Genre" : "Science Fiction",
            "Penulis" : "Toshikazu Kawaguchi",
            "Penerbit" : "PAN MACMILLAN UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "107",
            "Judul" : "The Antique Hunters Guide to Murder",
            "Genre" : "Mystery Horror",
            "Penulis" : "C.L. Miller",
            "Penerbit" : "PAN MACMILLAN UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "108",
            "Judul" : "She Who Became the Sun",
            "Genre" : "Fantasy",
            "Penulis" : "Shelley Parker-Chan",
            "Penerbit" : "PAN MACMILLAN UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "109",
            "Judul" : "GodKiller",
            "Genre" : "Fantasy",
            "Penulis" : "Hannah Kaner",
            "Penerbit" : "HARPER COLLINS UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "110",
            "Judul" : "House of Earth and Blood",
            "Genre" : "Fantasy",
            "Penulis" : "Sarah J. Maas",
            "Penerbit" : "Bloomsburry UK",
            "Tanggal_rilis" : "30 Sep 2024"
        },



        {
            "No" : "111",
            "Judul" : "Sunbringer",
            "Genre" : "Fantasy",
            "Penulis" : "Hannah Kaner",
            "Penerbit" : "HARPER COLLINS UK",
            "Tanggal_rilis" : "30 Sep 2024"
        },

        {
            "No" : "112",
            "Judul" : "Circe",
            "Genre" : "Fantasy",
            "Penulis" : "Madeline Miller",
            "Penerbit" : "Bloomsburry UK",
            "Tanggal_rilis" : "30 Sep 2024"
        },

        {
            "No" : "113",
            "Judul" : "Elsewhere",
            "Genre" : "Fantasy",
            "Penulis" : "Gabrielle Zevin",
            "Penerbit" : "Bloomsburry UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "114",
            "Judul" : "Why We Die",
            "Genre" : "Self-Help Book",
            "Penulis" : "Venki Ramakrishnan",
            "Penerbit" : "HACHETTE UK",
            "Tanggal_rilis" : "3 Okt 2024"
        },

        {
            "No" : "115",
            "Judul" : "Thinking 101",
            "Genre" : "Self-Help Book",
            "Penulis" : "Woo-Kyoung Ahn",
            "Penerbit" : "PAN MACMILLAN UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "116",
            "Judul" : "Shaolin: How to Win Without Conflict",
            "Genre" : "Self-Help Book",
            "Penulis" : "Bernhard Moestl",
            "Penerbit" : "PAN MACMILLAN UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "117",
            "Judul" : "Powerful",
            "Genre" : "Self-Help Book",
            "Penulis" : "Maisie Hill",
            "Penerbit" : "Bloomsburry UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "118",
            "Judul" : "Think Agaim",
            "Genre" : "Self-Help Book",
            "Penulis" : "Adam Grant",
            "Penerbit" : "Penguin UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "119",
            "Judul" : "How to Think Like an Economist",
            "Genre" : "Self-Help Book",
            "Penulis" : "Robbie Mochrie",
            "Penerbit" : "Bloomsburry UK",
            "Tanggal_rilis" : "2 Okt 2024"
        },

        {
            "No" : "120",
            "Judul" : "Talk Like TED: The 9 Public Speaking Secrets of the Worlds Top Minds",
            "Genre" : "Self-Help Book",
            "Penulis" : "Carmine Gallo",
            "Penerbit" : "PAN MACMILLAN UK",
            "Tanggal_rilis" : "2 Okt 2024"
        }

        ] ';

    $List = json_decode($Novel);

    // echo "<center> <h2> Kumpulan Novel Terbaru </h2> </center>";

    echo "<center>";
        echo "<table border='1' cellspacing='0' >";
            echo "<tr align='center'>";
                echo "<td colspan = '6'> <h2> Kumpulan Novel Terbaru </h2> </td>";
            echo "</tr>";

            echo "<tr align = 'center' style='font-weight:bold;' >";
                echo "<td> No </td>";
                echo "<td> Judul </td>";
                echo "<td> Genre </td>";
                echo "<td> Penulis </td>";
                echo "<td> Penerbit </td>";
                echo "<td> Tanggal </td>";
            echo "</tr>";

            
                foreach ($List as $Buku) {
                    // echo "<table>";
                    //     echo "<tr> <td> Nama </td> <td> : </td> <td>" . ($Buku -> No) . "</td> </tr>";
                    //     echo "<tr> <td> Judul </td> <td> : </td> <td>" . ($Buku -> Judul) . " </td> </tr>";
                    //     echo "<tr> <td> Genre </td> <td> : </td> <td>" . ($Buku -> Genre) . " </td> </tr>";
                    //     echo "<tr> <td> Penulis </td> <td> : </td> <td>" . ($Buku -> Penulis) . "</td> </tr>";
                    //     echo "<tr> <td> Penerbit </td> <td> : </td> <td>" . ($Buku -> Penerbit) . "</td>  </tr>";
                    //     echo "<tr> <td> Tanggal Rilis </td> <td> : </td> <td>" . ($Buku -> Tanggal_rilis) . "</td> </tr>";
                    //     echo "<hr>";
                    // echo "</table>";

                    echo "<tr>";
                        echo "<td>" . ($Buku -> No) . "</td>";
                        echo "<td>" . ($Buku -> Judul) . "</td>";
                        echo "<td>" . ($Buku -> Genre) . "</td>";
                        echo "<td>" . ($Buku -> Penulis) . "</td>";
                        echo "<td>" . ($Buku -> Penerbit) . "</td>";
                        echo "<td>" . ($Buku -> Tanggal_rilis) . "</td>";
                    echo "</tr>";

        
                }

        echo "</table>";

?>