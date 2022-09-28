<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas_php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
        <div class="mb-3">
            <label class="form-label" for="namaLengkap">Nama Lengkap</label>
            <input class="form-control" id="namaLengkap" name="nama" type="text" placeholder="Nama Lengkap" data-sb-validations="" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="agama">Agama</label>
            <select class="form-select" id="agama" name="agama" aria-label="Agama">
                <option value="pilih">Pilih Agama Anda</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check">
                <input class="form-check-input" id="manager" value="Manager" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="asisten" value="Asisten" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="asisten">Asisten Manager</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="kabag" value="Kepala Bagian" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="kabag">Kepala Bagian</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="staff" value="Staff" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status Menikah</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="menikah" value="Menikah" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="belumMenikah" value="Belum Menikah" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
            <input class="form-control" name="jmlhAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="" />
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="proses">Simpan</button>
        </div>
    </form>

    <!--tangkap request-->
<?php

if(isset($_POST['nama']) || isset($_POST['agama']) || isset($_POST['jabatan']) || isset($_POST['status']) || isset($_POST['jmlhAnak']) || isset($_POST['proses'])){ 

$nama = $_POST['nama'];
$relg = $_POST['agama'];
$jabatan = $_POST['jabatan'];
$nikah = $_POST['status'];
$anak = $_POST['jmlhAnak'];
$tombol = $_POST['proses'];
$gapok = 0;



switch($jabatan){
    case "Manager" : $gapok = 20000000; break;
    case "Asisten" : $gapok = 15000000; break;
    case "Kepala Bagian" : $gapok = 10000000; break;
    case "Staff" : $gapok = 4000000; break;
    default : $gapok = 0;
}

$tunJab = 0.2 * $gapok;

if($nikah == 'Menikah' && $anak <= 2){
    $tunKel = 0.05 * $gapok;
} else if($nikah == 'Menikah' && $anak <= 5){
    $tunKel = 0.1 * $gapok;
} else if($nikah == 'Menikah' && $anak > 5){
    $tunKel = 0.15 * $gapok;
} else {
    $tunKel = 0;
}

$gakot = $gapok + $tunJab + $tunKel;
$zakat = ($relg == 'Islam' && isset($gakot) >= 6000000) ? (0.025 * $gakot) : 0;
$THP = $gakot - $zakat; ?>

<table class="table mt-5">
  <thead>
    <tr class="table-warning">
      <th colspan="2">Data Pekerja</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nama Pegawai</td>
      <td><?= $nama ?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><?= $relg ?></td>
    </tr>
    <tr>
      <td>Jabatan</td>
      <td><?= $jabatan ?></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><?= $nikah ?></td>
    </tr>
    <tr>
      <td>Jumlah Anak</td>
      <td><?= $anak ?></td>
    </tr>
    <tr>
      <td>Gaji Pokok</td>
      <td><?= number_format($gapok, 2, ',', '.'); ?></td>
    </tr>
    <tr>
      <td>Tunjangan Jabatan</td>
      <td><?= number_format($tunJab, 2, ',', '.'); ?></td>
    </tr>
    <tr>
      <td>Tunjangan Keluarga</td>
      <td><?= number_format($tunKel, 2, ',', '.'); ?></td>
    </tr>
    <tr>
      <td>Gaji Kotor</td>
      <td><?= number_format($gakot, 2, ',', '.'); ?></td>
    </tr>
    <tr>
      <td>Zakat Profesi</td>
      <td><?= number_format($zakat, 2, ',', '.'); ?></td>
    </tr>
    <tr>
      <td>Take Home Pay</td>
      <td><?= number_format($THP, 2, ',', '.'); ?></td>
    </tr>
  </tbody>
</table>

    <?php }
?>
</div>

 

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>




