<?php

use LDAP\Result;

$m1 = ["nim" => "20081011", "nama" => "Ayas", "nilai" => 58];
$m2 = ["nim" => "20081012", "nama" => "Calista", "nilai" => 86];
$m3 = ["nim" => "20081013", "nama" => "Rena", "nilai" => 77];
$m4 = ["nim" => "20081014", "nama" => "Citra", "nilai" => 34];
$m5 = ["nim" => "20081015", "nama" => "Bagas", "nilai" => 61];
$m6 = ["nim" => "20081016", "nama" => "Angga", "nilai" => 42];
$m7 = ["nim" => "20081017", "nama" => "Genta", "nilai" => 50];
$m8 = ["nim" => "20081018", "nama" => "Rizka", "nilai" => 88];
$m9 = ["nim" => "20081019", "nama" => "Esa", "nilai" => 25];
$m10 = ["nim" => "20081020", "nama" => "Aska", "nilai" => 100];

$mhs = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
$judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


/*Buat daftar aggregate nilai gunakan aggregate function di array 
(TFoot) => Nilai Tertinggi, Nilai Terendah, Nilai Rata2, Jumlah 
Siswa*/
$jmlhMhs = count($mhs);
$score = array_column($mhs, "nilai");
$total = array_sum($score);
$maxScore = max($score); //tertinggi
$minScore = min($score); //terendah
$rata2 = $total / $jmlhMhs;

$tfoot = [
    "Nilai Tertinggi" => $maxScore,
    "Nilai Terendah" => $minScore,
    "Nilai Rata-rata" => $rata2,
    "Jumlah Siswa" => $jmlhMhs
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas3_PHP</title>
</head>
<body>
<table class="table table-bordered">
  <thead>
    <tr class="table-success">
        <?php
            foreach($judul as $title) {
        ?> 
            <th scope="col"><?= $title ?></th>
        <?php } ?>
    </tr>
  </thead>
  <tbody>
    <?php
        for ($id = 0; $id <= 9; $id++){
            /*set grade A - E (if multi kondisi)
            A = 85 - 100, B = 75 - < 85 dst 
                A = 100 - 86
                B = 85 - 71
                C = 70 - 56
                D = 55 - 41
                E = 40 - 25*/
            if ($mhs[$id]["nilai"] <= 40){
                $grade = "E";
            } else if ($mhs[$id]["nilai"] <= 55){
                $grade = "D";
            } else if ($mhs[$id]["nilai"] <= 70){
                $grade = "C";
            } else if ($mhs[$id]["nilai"] <= 85){
                $grade = "B";
            } else {
                $grade = "A";
            }
        
            //set predikat (switch case)
            //A = Memuaskan, B=Bagus, C=Cukup, D=kurang, E=Buruk
            switch($grade){
            case "A" : $predikat = "Memuaskan"; break;
            case "B" : $predikat = "Bagus"; break;
            case "C" : $predikat = "Cukup"; break;
            case "D" : $predikat = "Kurang"; break;
            case "E" : $predikat = "Buruk"; break;
            default : $predikat = "-"; break;
            }
        
            $ket = ($mhs[$id]["nilai"] >= 60) ? "Lulus" : "Gagal";
    ?>
        <tr>
            <td><?= $id + 1; ?></th>
            <td><?= $mhs[$id]["nim"] ?></td>
            <td><?= $mhs[$id]["nama"] ?></td>
            <td><?= $mhs[$id]["nilai"] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>

        <?php 
    } ?>
  </tbody>
  <tfoot>
        <?php
            foreach($tfoot as $agr => $result) {
        ?>
            <tr>
                <th colspan="6" class="table-success"><?= $agr ?></th>
                <td><?= $result ?></td>
            </tr>
        <?php } ?>
  </tfoot>
</table>
</body>
</html>