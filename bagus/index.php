<?php 

// buatlah class dan object untuk menampilkan list Buku
// Judul Buku | Penulis, Penerbit (Rp. Harga)
class Buku {
    // tuliskan sintaks disini
    // gunakan method constructor
    // sertakan method getLabel() untuk mencetak label
    public  $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga = 0;

    // constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        $str = "{$this->judul} | {$this->penulis}, Penerbit : {$this->penerbit} (Rp.{$this->harga} Ribu)";
        return $str;
    }
}

//buat minimal 2 objek
$buku1 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", "Gramedia", 98);

$buku2 = new Buku("Laskar Pelangi", "Andrea Hirata", "Bentang", 85);

// panggil function getLabel() dibawah sini untuk semua object
echo $buku1->getLabel();
echo "<hr>";
echo $buku2->getLabel();
