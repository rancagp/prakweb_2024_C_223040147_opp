<?php 

class Produk {
    public $judul,  
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 );
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000 );
$produk3 = new Produk("Dragon Ball", "Akira Toriyama,", "Global TV", 99000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Novel : " . $produk2->getLabel();
echo "<br>";
echo "Anime : " . $produk3->getLabel();

//var_dump($produk3);

?>