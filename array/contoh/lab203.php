<?php

$data_safitri = [
    [
        "nama" => "Safitri",
        "daftar_buah_kesukaan" => 
        [
            [
                "nama_buah" => "Anggur",
                "jenis" =>
                [
                    [
                        "jenis_buah" => "Anggur Ijo",
                        "jenis_buah1" => "Anggur Putih"
                    ],

                ],
            ],

        ],
    ],
];
$data_rahman = [
    [
        "nama" => "Rahman",
        "daftar_buah_kesukaan1" => 
        [
            [
                "nama_buah" => "Alpukat",
                "nama_buah1" => "Apel",
                "jenis1" =>
                [
                    [
                        "jenis_buah" => "Alpukat Mentega",
                        "jenis_buah1" => "Alpukat Biasa",
                        "jenis_buah2" => "Apel Merah",
                        "jenis_buah3" => "Apel Hijau"
                    ],

                ],
            ],

        ],
    ],
];

foreach ($data_safitri as $data1){
    echo "Nama Pemilik : ".$data1["nama"]."<br>";
    echo "Daftar Buah Kesukaan : ";
    echo "<ul>";

    foreach ($data1["daftar_buah_kesukaan"] as $buah_kesukaan){
        echo "<li>".$buah_kesukaan["nama_buah"]."</li>";
    }

    foreach ($buah_kesukaan["jenis"] as $jenis){
        echo "&nbsp&nbsp&nbsp&nbsp-".$jenis["jenis_buah"]."<br>";
        echo "&nbsp&nbsp&nbsp&nbsp-".$jenis["jenis_buah1"];
    }
    echo "</ul>";
    echo "<hr>";

}

foreach ($data_rahman as $data2){
    echo "Nama Pemilik : ".$data2["nama"]."<br>";
    echo  "Daftar Buah Kesukaan : ";
    echo "<ul>";

    foreach ($data2["daftar_buah_kesukaan1"] as $buah_kesukaan1){
        echo "<li>".$buah_kesukaan1["nama_buah"]."</li>";
    }

    foreach ($buah_kesukaan1["jenis1"] as $jenis1){
        echo "&nbsp&nbsp&nbsp&nbsp-".$jenis1["jenis_buah"]."<br>";
        echo "&nbsp&nbsp&nbsp&nbsp-".$jenis1["jenis_buah1"];
        echo "<br>";
        echo "<br>";
    }
    foreach ($data2["daftar_buah_kesukaan1"] as $buah_kesukaan2){
        echo "<li>".$buah_kesukaan2["nama_buah1"]."</li>";
    }
    foreach ($buah_kesukaan1["jenis1"] as $jenis2){
        echo "&nbsp&nbsp&nbsp&nbsp-".$jenis2["jenis_buah"]."<br>";
        echo "&nbsp&nbsp&nbsp&nbsp-".$jenis2["jenis_buah1"];
    }
    echo "</ul>";
}

?>