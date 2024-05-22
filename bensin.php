<?php

class shell {
    protected $ppn;
    private $SSuper,
                $SVPower,
                $SVPowerDiesel,
                $SVPowerNitro;
   public $jumlah,
             $jenis;           
             
 function __construct( ) {
    $this->ppn = 0.1;
 }
public function setHarga($tipe1,$tipe2,$tipe3,$tipe4) {
    $this->SSuper = $tipe1;
    $this->SVPower = $tipe2;
    $this->SVPowerDiesel = $tipe3;
    $this->SVPowerNitro = $tipe4;
    }

public function getHarga( ) {
    $data ['SSuper'] = $this->SSuper;
    $data['SVPower'] = $this->SVPower;
    $data['SVPowerDiesel'] = $this->SVPowerDiesel;
    $data['SVPowerNitro'] = $this->SVPowerNitro;
    return $data;
    }   
}

class Beli extends shell {
    public function hargaBeli() {
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $hargaBayar = $hargaBeli + $hargaPPN;
        return $hargaBayar;
    }
    public function cetakPembelian() {
        echo "<center>";
        echo"------------------------------------------------" . "<br>";
        echo "Anda membeli bahan bakar minyak tipe " . $this->jenis. "<br>";
        echo "dengan jumlah" . $this->jumlah . "liter <br>";
        echo "total yang harus anda bayar Rp. " . number_format($this->hargaBeli(), 0,null,".",) . "<br>";
        echo "-----------------------------------------------";
        echo "</center>";
    }
}


?>