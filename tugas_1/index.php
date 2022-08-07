<?php

echo "Hewan";
echo "<hr>";

class Hewan {
    public $jumlah_kaki,$bisa_terbang;
}

class Kucing extends Hewan {
    function bersuara()
    {
        return "meong meong meong";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Anjing extends Hewan {
    function bersuara()
    {
        return "guk guk guk guk";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Elang extends Hewan {
    function bersuara()
    {
        return "Miiippp";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

class Angsa extends Hewan {
    function bersuara()
    {
        return "kwaakkkkkkkkkk";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

$Tono = new Kucing;
$Tono->jumlah_kaki = 4;
echo "Tono adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$Tono->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Tono->bisa_terbang()."<br>";
echo "Bersuara: " .$Tono->bersuara()."<br>";

echo "<hr>";

$Gizmo = new Anjing;
$Gizmo->jumlah_kaki = 4;
echo "Gizmo Adalah Anjing <br>";
echo "Punya Kaki Sebanyak" .$Gizmo->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Gizmo->bisa_terbang()."<br>";
echo "Bersuara: " .$Gizmo->bersuara()."<br>";

echo "<hr>";

$Loki = new Elang;
$Loki->jumlah_kaki = 2;
echo "Loki Adalah Elang <br>";
echo "Punya Kaki Sebanyak" .$Loki->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Loki->bisa_terbang()."<br>";
echo "Bersuara: " .$Loki->bersuara()."<br>";

echo "<hr>";

$Oscar = new Angsa;
$Oscar->jumlah_kaki = 2;
echo "Oscar Adalah Angsa <br>";
echo "Punya Kaki Sebanyak" .$Oscar->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Oscar->bisa_terbang()."<br>";
echo "Bersuara: " .$Oscar->bersuara()."<br>";

echo "<hr>";

?>