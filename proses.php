<?php
session_start();
$harga_beli = $_POST['harga_beli'];
$kondisi_fisik = $_POST['kondisi_fisik'];
$kondisi_aksesoris = $_POST['kondisi_aksesoris'];

$arr = [$harga_beli, $kondisi_fisik, $kondisi_aksesoris];

$hasil = '';

function kesimpulan($hasil)
{

    if ($hasil == '1') {
        echo "Harga Jual Sangat Tinggi";
    } elseif ($hasil == '2') {
        echo "Harga Jual Tinggi";
    } elseif ($hasil == '3') {
        echo "Harga Jual Sedang";
    } elseif ($hasil == '4') {
        echo "Harga Jual Rendah";
    } elseif ($hasil == '5') {
        echo "Harga Jual Sangat Rendah";
    } else {
        echo "Harap masukan inputan yang sesuai";
    }
}

if ($arr['0'] == 'tinggi' && $arr['1'] == 'bagus' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(1);
} elseif ($arr['0'] == 'tinggi' && $arr['1'] == 'bagus' && $arr['2'] == 'sedang') {
    $harga_jual = kesimpulan(1);
} elseif ($arr['0'] == 'tinggi' && $arr['1'] == 'bagus' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(2);
} elseif ($arr['0'] == 'tinggi' && $arr['1'] == 'sedang' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(2);
} elseif ($arr['0'] == 'tinggi' && $arr['1'] == 'sedang' && $arr['2'] == 'sedang') {
    $harga_jual = kesimpulan(2);
} elseif ($arr['0'] == 'tinggi' && $arr['1'] == 'sedang' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'tinggi' && $arr['1'] == 'kurang' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'tinggi' && $arr['1'] == 'kurang' && $arr['2'] == 'sedang') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'tinggi' && $arr['1'] == 'kurang' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'bagus' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'bagus' && $arr['2'] == 'sedang') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'bagus' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'sedang' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'sedang' && $arr['2'] == 'sedang') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'sedang' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(4);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'kurang' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(4);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'kurang' && $arr['2'] == 'sedang') {
    $harga_jual = kesimpulan(4);
} elseif ($arr['0'] == 'sedang' && $arr['1'] == 'kurang' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(5);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'bagus' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(4);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'bagus' && $arr['2'] == 'sedang') {
    $harga_jual = kesimpulan(3);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'bagus' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(4);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'sedang' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(4);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'sedang' && $arr['2'] == 'sedang') {
    $harga_jual = kesimpulan(4);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'sedang' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(5);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'kurang' && $arr['2'] == 'bagus') {
    $harga_jual = kesimpulan(5);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'kurang' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(5);
} elseif ($arr['0'] == 'rendah' && $arr['1'] == 'kurang' && $arr['2'] == 'kurang') {
    $harga_jual = kesimpulan(5);
} else {
    echo "masukan";
}





// if ($harga_jual != 0) {
//     header('location: index.php');
// } else {
//     header('location: index.php');
// }
