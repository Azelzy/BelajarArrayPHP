<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Dasar PHP</title>
    <link rel="shortcut icon" href="febri.jpg">
    
</head>
<body>

<!-- Data Array -->
<?php
$array = ["ajuka", 14, true];
$dataSiswa = [
    [
        "nama" => "Azuka",
        "asal" => "Indonesia",
        "kelas" => "11 PPLG 1",
        "umur" => 14
    ],
    [
        "nama" => "Budi",
        "asal" => "Indonesia",
        "kelas" => "11 PPLG 1",
        "umur" => 15
    ],
    [
        "nama" => "Cici",
        "asal" => "Indonesia",
        "kelas" => "11 PPLG 1",
        "umur" => 16
    ],
    [
        "nama" => "Dodi",
        "asal" => "Indonesia",
        "kelas" => "11 PPLG 1",
        "umur" => 17
    ],
    [
        "nama" => "Eka",
        "asal" => "Indonesia",
        "kelas" => "11 PPLG 1",
        "umur" => 18
    ]
];
?>

<h1>Data Array SISWA</h1>
<p>
    <?= $dataSiswa[0]["nama"]; ?>
    mempunyai teman bernama <?= $dataSiswa[1]["nama"]; ?>.<br>
    yang berasal dari <?= $dataSiswa[1]["asal"]; ?>.<br>
    Mereka berdua berada di kelas <?= $dataSiswa[0]["kelas"]; ?>.<br>
    Umur <?= $dataSiswa[0]["nama"]; ?> adalah <?= $dataSiswa[0]["umur"]; ?> tahun.<br>
    dan umur <?= $dataSiswa[1]["nama"]; ?> adalah <?= $dataSiswa[1]["umur"]; ?> tahun.<br>
    sedangkan teman lainnya adalah <?= $dataSiswa[2]["nama"]; ?>, <?= $dataSiswa[3]["nama"]; ?>, dan <?= $dataSiswa[4]["nama"]; ?>.
</p>

<h2>Data Siswa kelas 11 PPLG 1</h2>
<table border=1>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Asal</th>
        <th>Kelas</th>
        <th>Umur</th>
    </tr>
    <?php 
    $no = 1; // Reset nomor untuk tabel siswa
    foreach ($dataSiswa as $siswa): 
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $siswa['nama'] ?></td>
        <td><?= $siswa['asal'] ?></td>
        <td><?= $siswa['kelas'] ?></td>
        <td><?= $siswa['umur'] ?> tahun</td>
    </tr>
    <?php endforeach; ?>    
</table>

<h3>Data Siswa dalam format List</h3>
<?php
foreach ($dataSiswa as $siswa) {
?>
<ul>
    <li>Nama: <?= $siswa['nama'] ?></li>
    <li>Asal: <?= $siswa['asal'] ?></li>
    <li>Kelas: <?= $siswa['kelas'] ?></li>
    <li>Umur: <?= $siswa['umur'] ?> tahun</li>
</ul>
<?php
}
?>

<!-- Data unit spring -->
<?php
$dataUnit = [
    [
        "nama" => "g17",
        "FPS" => "150 FPS",
        "kapasitas" => "26 BB",
        "gambar" => "gambar/g17.png"
    ],
    [
        "nama" => "m1911",
        "FPS" => "150 FPS",
        "kapasitas" => "26 BB",
        "gambar" => "gambar/m1911.png"
    ],
    [
        "nama" => "p226",
        "FPS" => "150 FPS",
        "kapasitas" => "26 BB",
        "gambar" => "gambar/p226.png"
    ],
    [
        "nama" => "mnp",
        "FPS" => "150 FPS",
        "kapasitas" => "26 BB",
        "gambar" => "gambar/mnp.png"
    ],
    [
        "nama" => "beretta",
        "FPS" => "150 FPS",
        "kapasitas" => "26 BB",
        "gambar" => "gambar/bereta.png"
    ]
];
?>

<h2>Data Unit Spring</h2>
<table border=1>
    <tr>
        <th>No</th>
        <th>Nama Unit</th>
        <th>Kekuatan Spring</th>
        <th>Kapasitas BB</th>
        <th>Gambar</th>
    </tr>
    <?php 
    $no = 1; // Reset nomor untuk tabel unit spring
    foreach ($dataUnit as $unit): 
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= ucfirst($unit['nama']) ?></td>
        <td><?= $unit['FPS'] ?></td>
        <td><?= $unit['kapasitas'] ?></td>
        <td><img src="<?= $unit['gambar'] ?>" alt="<?= $unit['nama'] ?>" width="100"></td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Statement If-Else Waktu -->
<?php
$waktu = 1700;

if ($waktu <= 1200) {
    $hasil = "Selamat pagi";
} elseif ($waktu < 1500) {
    $hasil = "Selamat siang";
} elseif ($waktu < 2000) {
    $hasil = "Selamat sore";
} elseif ($waktu >= 2000) {
    $hasil = "Selamat malam";
}
?>
<h3><?= $hasil ?>, waktu sekarang adalah <?= $waktu ?></h3>

<!-- Statement If-Else Umur -->
<?php
$umur = 14;
if ($umur < 5) {
    $status = "bayi";
} elseif ($umur < 12) {
    $status = "anak-anak";
} elseif ($umur < 18) {
    $status = "remaja";
} else {
    $status = "dewasa";
}
?>
<h3>Umur saya adalah <?= $umur ?> tahun, jadi saya termasuk <?= $status ?></h3>

<!-- Statement BMI -->
<?php
$berat = 70; // dalam kilogram
$tinggi = 1.70; // dalam meter
$bmi = $berat / ($tinggi * $tinggi);
if ($bmi < 18.5) {
    $kategori = "Kurus";
} elseif ($bmi < 22.9) {
    $kategori = "Normal";
} elseif ($bmi < 24.9) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
}
?>
<h3>BMI saya adalah <?= round($bmi, 2) ?>, jadi saya termasuk kategori <?= $kategori ?></h3>

<!-- Statement Nilai -->
<?php
$nilai = 98;
if ($nilai > 100) {
    $grade = "A+";
} elseif ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}
?>
<h3>Nilai saya adalah <?= $nilai ?>, jadi grade saya adalah <?= $grade ?></h3>

<!-- Operator Penugasan -->
<h3>Operator Penugasan</h3>
<?php
$T = 100;
echo "Nilai Awal T adalah $T <br>";
$T += 20;
echo "Nilai T setelah ditambah 20 adalah $T <br>";
$T -= 30;
echo "Nilai T setelah dikurangi 30 adalah $T <br>";
$T *= 3;
echo "Nilai T setelah dikali 3 adalah $T <br>";
$T /= 10;
echo "Nilai T setelah dibagi 10 adalah $T <br>";
$T %= 7;
echo "Nilai T setelah di modulus 7 adalah $T <br>";

// Looping for Ganjil
echo "<h3>Angka Ganjil dari 1 sampai 37:</h3>";
for ($a = 1; $a <= 37; $a++) {
    if ($a % 2 != 0) {
        echo "$a = Ganjil <br>";
    }
}
?>

<!-- Data Diri -->
<?php
$jeneng = "Azuka";
$kelas = "11 PPLG 1";
$makanan = "sate";
$minuman = "es teh";
$alamat = "jl. raya no 1";
$umur = "17 tahun"; // Diperbaiki dari 617 tahun
$hobi = "mancing, main game, tidur, nonton anime, olahraga, belajar, berkumpul dengan teman-teman, membaca buku";
?>
<h2>Halo!, nama saya <?= $jeneng ?>, saya kelas <?= $kelas ?>, hobi saya <?= $hobi ?>, alamat saya <?= $alamat ?>, umur : <?= $umur ?></h2>

</body>
</html>