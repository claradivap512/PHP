<?php
require_once "bidang.php";

$circ = new circle(5);
$rect = new rectangle(4,5);
$tri = new triangle(6,3);

/*
echo "Luas Lingkaran = " .$circ1->luasBidang();
echo "<br/>Keliling Lingkaran = " .$circ1->kelilingBidang();


echo "<br/>Luas Persegi Panjang = " .$rect->luasBidang();
echo "<br/>Keliling Persegi Panjang = " .$rect->kelilingBidang(); */

$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Kumpulan Bidang</title>
</head>
<body>
    <table class="table table-bordered" style="text-align: center">
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
            <!--'No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'-->
            <tr>
                <td>1</td>
                <td><?= $circ->namaBidang() ?></td>
                <td>Jari - jari = <?= $circ->jari2 ?></td>
                <td><?= $circ->luasBidang() ?></td>
                <td><?= $circ->kelilingBidang() ?></td>
            </tr>
            <tr rowspan = "2">
                <td>2</td>
                <td><?= $rect->namaBidang()?></td>
                <td>Panjang = <?= $rect->panjang ?> <br> Lebar = <?= $rect->lebar ?></td>
                <td><?= $rect->luasBidang()?></td>
                <td><?= $rect->kelilingBidang()?></td>
            </tr>
            <tr rowspan = "2">
                <td>3</td>
                <td><?= $tri->namaBidang()?></td>
                <td>Alas = <?= $tri->alas ?> <br> Tinggi = <?= $tri->tinggi ?></td>
                <td><?= $tri->luasBidang()?></td>
                <td><?= $tri->kelilingBidang()?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>