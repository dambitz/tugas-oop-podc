<?php 


class film {
    public  $judul = "podc", 
            $genre = "sci fi", 
            $rating = 0, 
            $director = 0;
    
    public function __construct($judul = "judul", $genre = "genre", $rating = 0, $director = 0) {
        $this->judul = $judul;
        $this->genre = $genre;
        $this->rating = $rating;
        $this->director = $director;
    }
    
    public function getLabel() {
        $str = "Judul : {$this->judul}, Genre : {$this->genre}, Rating : {$this->rating}, Director : {$this->director}";
        return $str;
    }
}

$produk1 = new film();

$produk1->judul = "podc";
$produk1->genre = "sci fi";
$produk1->rating = 8.0;
$produk1->director = "adam";

$produk2 = new film();

$produk2->judul = "star wars";
$produk2->genre = "adventure";
$produk2->rating = 9.5;
$produk2->director = "george lucas";

echo $produk1->getLabel();
echo "<hr>";
echo $produk2->getLabel();
?>
