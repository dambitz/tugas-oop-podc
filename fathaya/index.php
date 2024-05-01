<?php 
// buatlah class dan object untuk menampilkan hasil perhitungan luas Persegi Panjang dan segitiga

// variabel1 = panjang atau alas
// variabel2 = lebar atau tinggi

class Luas {
    public  $variabel1,
            $variabel2;

    // buat method constructor
    public function __construct($variabel1 = 0, $variabel2 = 0){
        $this->variabel1 = $variabel1;
        $this->variabel2 = $variabel2;
    }
    // method luasPersegiPnj()
    public function luasPersegiPnj(){
        $luasPersegiPnj = $this->variabel1 * $this->variabel2;
        return $luasPersegiPnj;
    }
    // method luasSegitiga()
    public function luasSegitiga(){
        $luasSegitiga = 0.5 * ($this->variabel1 * $this->variabel2);
        return $luasSegitiga;
    }
}

$persegiPanjang = new Luas(10, 6);
$segitiga = new Luas(20, 6);

echo "Luas Persegi Panjang = ". $persegiPanjang->luasPersegiPnj(). " m2"; // menampilkan Luas P. Panjang
echo "<hr>";
echo "Luas Segitiga = ". $segitiga->luasSegitiga(). " m2"; // menampilkan Luas Segitiga
