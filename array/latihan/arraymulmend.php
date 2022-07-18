<?php

$example = [
    [
        'dosen' => "Aceng Fikri",
        'mahasiswa' => "Syifa Nurfadillah",
        'kuliah' =>
        [
            ['makul' => "RPL"],
            ['makul' => "Database"],
            ['makul' => "Oop"],
        ],
        'hobi' =>
        [
            ['hob' => "Menulis"],
            ['hob' => "Main Game"],
        ],
    ],
    
    [
        'dosen' => "Aceng Fikri",
        'mahasiswa' => "Rani Rahma Wulan",
        'kuliah' =>
        [
            ['makul' => "RPL"],
            ['makul' => "Database"],
            ['makul' => "Oop"],
        ],
        'hobi' =>
        [
            ['hob' => "Makan"],
            ['hob' => "Main"],
        ],
    ],
    [
        'dosen' => "Aceng Fikri",
        'mahasiswa' => "Rafeyfa Asyla",
        'kuliah' =>
        [
            ['makul' => "RPL"],
            ['makul' => "Database"],
            ['makul' => "Oop"],
        ],
        'hobi' =>
        [
            ['hob' => "Tidur"],
            ['hob' => "Belajar"],
        ],
    ],

    [
        'dosen' => "Ujang Betok",
        'mahasiswa' => "Refa Desi Deria",
        'kuliah' =>
        [
            ['makul' => "RPL"],
            ['makul' => "Database"],
            ['makul' => "Oop"],
        ],
        'hobi' =>
        [
            ['hob' => "Buka Sosmed"],
            ['hob' => "Main sama teman"],
        ],

    ],
    
    [
        'dosen' => "Ujang Betok",
        'mahasiswa' => "Adila Giska",
        'kuliah' =>
        [
            ['makul' => "RPL"],
            ['makul' => "Database"],
            ['makul' => "Oop"],
        ],
        'hobi' =>
        [
            ['hob' => "Belajar"],
            ['hob' => "Main Gitar"],
        ],

    ],
    [
        'dosen' => "Ujang Betok",
        'mahasiswa' => "Ai Romania",
        'kuliah' =>
        [
            ['makul' => "RPL"],
            ['makul' => "Database"],
            ['makul' => "Oop"],
        ],
        'hobi' =>
        [
            ['hob' => "Belajar"],
            ['hob' => "Menonton Film"],
        ],

    ],
    
];

foreach($example as $data){
    echo "<b>Nama dosen : </b>" . $data['dosen'] . "<br>";
    echo "Nama mahasiswa : " . $data['mahasiswa'] . "<br>";
    echo "Daftar mata kuliah : ";
    echo "<ul>";
    foreach($data['kuliah'] as $kuliah){
        echo "<li>" . $kuliah['makul'] ."</li>";
    }
    echo "</ul>";
    echo "Hobi : ";
    echo "<ul>";
    foreach($data['hobi'] as $hobi){
        echo "<li>" . $hobi['hob'] . "</li>";
    }
    echo "<hr>";
    
    echo "</ul>";
}



?>