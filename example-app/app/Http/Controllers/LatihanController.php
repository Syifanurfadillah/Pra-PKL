<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu () 
    {
        $a = [
            array('menu1' => "Beranda" ,
                'menu2' => "Berita",
                'kategori' => 'Olahraga',
                'jenisOR' => ['Sepak Bola', 'Bulu Tangkis'],
                'kategori1' => ['Politik', 'Manca Negara'],
                'menu3' => "Tentang"),
        ];

        return view('page1.menu', ['menu' => $a]);
    }


    public function dosen()
    {

        $b = [
            array('Nados' => 'Yusuf Bachtiar', 'MatKul' => 'Pemrograman Mobile', 
            'mahasiswa' => [
                ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ['nama' => 'Ubay holin', 'nilai' => 87],
                ['nama' => 'Fadillah', 'nilai' => 95],
            ]
            ),

            array('Nados' => 'Yaris Riyadi', 'MatKul' => 'Pemrograman Web', 
            'mahasiswa' => [
                ['nama' => 'Alfred McTomminay', 'nilai' => 67],
                ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ['nama' => 'Akid Hendra', 'nilai' => 50],
                ['nama' => 'Dany Irawan', 'nilai' => 70],
                ['nama' => 'Chandra Mega Putra', 'nilai' => 60],
            ]
            ),
        ];

        // melihat data dumy basis json
        // dd ($a);

        // melakukan passing data looping conditional dari controller ke view
        return view('/page1.dosen', ['dosen' => $b]);
    }


    public function tv()
    {
        $tv = [

            ['stasiun' => 'Global TV','Siaran' => 'Spongebob', 'Jam_tayang' => '06:00','tanggal' => '14 july 2022'],
            ['stasiun' => 'MNCTV','Siaran' => 'Upin & Ipin', 'Jam_tayang' => '17:00','tanggal' => '15 july 2022'],
            ['stasiun' => 'Trans TV','Siaran' => 'ON The Spot', 'Jam_tayang' => '18:00','tanggal' => '16 july 2022'],
            ['stasiun' => 'Antv','Siaran' => 'Gopi', 'Jam_tayang' => '14:00','tanggal' => '17 july 2022'],
            ['stasiun' => 'Indosiar','Siaran' => 'Dangdut', 'Jam_tayang' => '14:00','tanggal' => '13 july 2022'],
        ];
        return view('page1.tv',['tv' => $tv]);
    }

    public function belanja ()
    {
        $barang = [
            ['nama' => 'Alfian' , 'membeli' =>
            [
                ['beli' => 'sepatu' , 'harga' => 250000],
                ['beli' => 'baju' , 'harga' => 100000],
                ['beli' => 'celana' , 'harga' => 150000],
                ['beli' => 'kupluk' , 'harga' => 100000],
        ],
        ],

            ['nama' => 'Dida' , 'membeli' =>
            [
                ['beli' => 'topi' , 'harga' => 100000],
                ['beli' => 'baju' , 'harga' => 75000],
                ['beli' => 'celaa' , 'harga' => 125000], 
        ]
        ]
        ];
        return view('page1.belanja', ['belanja' => $barang]);
        
    }

}
