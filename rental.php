<?php

class data {
    public $Member;
    public $Jenis;
    public $Waktu;
    public $Diskon;
    protected $Pajak;
    private $Scooter, $Sport, $SportTouring, $Cross;
    private $ListMember = ['ana','sam', 'alex', 'ara'];

   public  function construct() {
        $this->Pajak = 10000;
}

public function GetMember() {
    if (in_array($this->Member, $this->ListMember)){
        return "member";
    } else {
        return "Non Member";
    }
}

public function setharga($jenis1, $jenis2, $jenis3, $jenis4) {
    $this->Scooter = $jenis1;
    $this->Sport = $jenis2;
    $this->SportTouring = $jenis3;
    $this->Cross = $jenis4;
}

public function getharga () {
    $data["Scooter"] = $this->Scooter;
    $data["Sport"] = $this->Sport;
    $data["SportTouring"] = $this->SportTouring;
    $data["Croos"] = $this-> Cross;
    return $data;
}

}

class  Rental extends Data {
    public function hargarental() {
        $dataharga = $this->getharga()[$this->Jenis];
        $diskon = $this->getMember() == "member" ? 5 :0 ;
        if ($this->Waktu === 1) {
          $bayar = ($dataharga -($dataharga * $diskon / 100)) + $this->Pajak;
        }else {
            $bayar = (($dataharga * $this->Waktu) - ($dataharga * $diskon / 100)) + $this->Pajak;
        }
        return[$bayar, $diskon];
    }

    public function pembayaran() {
        echo "<center>";
        echo $this->member . "berstatus sebagai " . $this->getmember() . "mendapatkan diskon sebesar" .$this->hargarental()[1] . "%";
        echo "<br />";
        echo "jenis motor yang di rental adalah " . $this->Jenis . "selama" . $this->Waktu . "hari";
        echo "<br />";
        echo "Harga rental perhari nya : Rp" . number_format($this->getharga()[$this->Jenis], 0, '', '.');
        echo "<br />";
        echo "<br />";
        echo "Besar yang harus di bayar adalah Rp." . number_format($this->hargarental()[0], 0, '', '.');
        echo "</center>";
    }
}