<?php
class Pegawai {
//member1 : variabel / property
//variabel : nip, nama, jabatan, agama, status
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    public $gapok;

//member 2 : konstruktor
//konstruktor (nip, nama, jabatan, agama, status)
    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

//member 3 : method
    /*setGajiPokok (switch case : 
    manager=>15jt, 
    asmen=>10jt, 
    kabag=>7jt, 
    staff=>4jt) */

    public function getGapok($jabatan)
    {
        switch($jabatan){
            case "Manager" : $gapok = 15000000; break;
            case "Asisten" : $gapok = 10000000; break;
            case "Kabag" : $gapok = 7000000; break;
            case "Staff" : $gapok = 4000000; break;
            default : $gapok = 0;
        }
        return $gapok;
    }

//setTunjab = 20% dari Gaji Pokok
    public function getTunjab(){
        return $this->getGapok($this->jabatan) * 0.2;
        //langsung return utk mengembalikan hasil / memberikan output dari suatu fungsi yg isinya rumus/formula
        
        /*return $setGapok(jabatan) ==> TIDAK BISA / ERROR, 
        karena jika menulis seperti itu, berarti membuat variable baru / memanggil variabel yg ada di dalam fungsi saja ALIAS
        variable scope suatu fungsi hanya terbatas pada fungsi itu sendiri.
        
        Perlu '$this->' utk mengambil isi dari variabel yg ada di luar fungsi*/
    }

//setTunkel= 10% dari Gaji Pokok untuk sudah menikah (ternary)
    public function getTunkel ()
    {
        return ($this->status == "Menikah") ? $this->getGapok($this->jabatan) * 0.1 : 0;
    }
    
//setZakatProfesi= 2,5% dari GajiPokok untuk muslim dan Gaji Kotor minimal 6jt
    public function getZakat()
    {
        $gakot = $this->getGapok($this->jabatan) + $this->getTunjab() + $this->getTunkel();
        return ($this->agama == "Islam" && $gakot > 6000000) ? $this->getGapok($this->jabatan) * 0.025 : 0;
    }

//gaji bersih
    public function getGasih()
    {
        return $this->getGapok($this->jabatan) + $this->getTunjab() + $this->getTunkel() + $this->getZakat();
    }

//mencetak => nip, nama, jabatan, agama, status, Gaji Pokok, Tunj Jab, Tunkel, Zakat, Gaji Bersih 
    public function cetak()
    {
        echo "NIP : " .$this->nip. "<br/>";
        echo "Nama : " .$this->nama. "<br/>";
        echo "Jabatan : " .$this->jabatan. "<br/>";
        echo "Agama : " .$this->agama. "<br/>";
        echo "Status : " .$this->status. "<br/>";
        echo "Gaji Pokok : Rp" .number_format(($this->getGapok($this->jabatan)), 2, ",", "."). "<br/>";
        echo "Tunjangan Jabatan : Rp" .number_format(($this->getTunjab()), 2, ",", "."). "<br/>";
        echo "Tunjangan Keluarga : Rp" .number_format(($this->getTunkel()), 2, ",", "."). "<br/>";
        echo "Zakat Profesi : Rp" .number_format(($this->getZakat()), 2, ",", "."). "<br/>";
        echo "Gaji Bersih : Rp" .number_format(($this->getGasih()), 2, ",", "."). "<br/>";
        echo "<hr/>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas4_php</title>
</head>
<body>
    <h4>Daftar Gaji Pegawai</h4>
    <?php
        //instance object
        //__construct($nip, $nama, $jabatan, $agama, $status)
        $p1 = new Pegawai ("202211", "Ucup", "Manager", "Islam", "Menikah");
        $p2 = new Pegawai ("202212", "Piko", "Asisten", "Hindu", "Belum Menikah");
        $p3 = new Pegawai ("202213", "Gofar", "Staff", "Islam", "Belum Menikah");
        $p4 = new Pegawai ("202214", "Sarah", "Kabag", "Buddha", "Menikah");
        $p5 = new Pegawai ("202215", "Tuktuk", "Staff", "Katolik", "Menikah");
        $p1->cetak();
        $p2->cetak();
        $p3->cetak();
        $p4->cetak();
        $p5->cetak();
    ?>
</body>
</html>