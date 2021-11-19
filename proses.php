<?php 
    $mangga = $_POST['mangga'];
    $salak = $_POST['salak'];
    $jambu = $_POST['jambu'];
    Class keranjang {
        var int $jumlahMangga, $jumlahJambu, $jumlahSalak;
        var int $hargaMangga = 15000;
        var int $hargaJambu = 13000;
        var int $hargaSalak = 10000;
        
        public function __construct($mangga, $jambu, $salak) {
            $this->jumlahMangga = $mangga;
            $this->jumlahJambu = $jambu;
            $this->jumlahSalak = $salak;
        }

        public function hitung() {
            $result = $this->jumlahJambu * $this->hargaJambu + $this->jumlahMangga * $this->hargaMangga + $this->jumlahSalak * $this->hargaSalak;

            echo $result;
        }
    }


    

    
    $newCart = new keranjang($mangga, $jambu, $salak);

    return $newCart->hitung();
?>