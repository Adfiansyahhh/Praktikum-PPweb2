<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $semester;
}

$siti = new Mahasiswa();
$siti->nama = "Siti Maesaroh";

$ucup = new Mahasiswa();
$ucup->nama = "Muhammad Yusuf";

echo $siti->nama; '<br/>';
echo $ucup->nama;