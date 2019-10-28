 <?php
 class kendaraan{
	 var $merk;
	 var $harga;
	 var $negara;
	 
	 function __construct($merk,$harga,$negara){
		 $this->merk=$merk;
		 $this->harga=$harga;
		 $this->negara=$negara;
	 }
	 function BacaMerk(){
		 return $this->merk;
	 }
	 function BacaHarga(){
		 return $this->harga;
	 }
	 function BacaNegara(){
		 return $this->negara;
	 }
 }
 $mobil = new kendaraan("Pajero Sport",800000000,"Japan");
 echo "Merk Kendaraan = ".$mobil->BacaMerk()."<br>";
 echo "Harga Kendaraan = ".$mobil->BacaHarga()."<br>";
 echo "Negara Kendaraan = ".$mobil->BacaNegara()."<br>";
 echo "=============================================================<br><br>";
 
 $mobil2 = new kendaraan("Honda",200000000,"Japan");
 echo "Merk Kendaraan = ".$mobil2->BacaMerk()."<br>";
 echo "Harga Kendaraan = ".$mobil2->BacaHarga()."<br>";
 echo "Negara Kendaraan = ".$mobil2->BacaNegara()."<br>";
 echo "=============================================================<br><br>";
 
 $mobil3 = new kendaraan("Daihatsu",400000000,"Japan");
 echo "Merk Kendaraan = ".$mobil3->BacaMerk()."<br>";
 echo "Harga Kendaraan = ".$mobil3->BacaHarga()."<br>";
 echo "Negara Kendaraan = ".$mobil3->BacaNegara()."<br>";
 echo "=============================================================<br><br>";
 ?>