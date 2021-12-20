<?php

// menangkap name dari form
function kesimpulan($hasil)
{

    if ($hasil == '1') {
        return "Harga Jual Sangat Tinggi";
    } elseif ($hasil == '2') {
        return "Harga Jual Tinggi";
    } elseif ($hasil == '3') {
        return "Harga Jual Sedang";
    } elseif ($hasil == '4') {
        return "Harga Jual Rendah";
    } elseif ($hasil == '5') {
        return "Harga Jual Sangat Rendah";
    } else {
        return "Harap masukan inputan yang sesuai";
    }
}

$harga_beli = $_POST['harga_beli'];

$kondisi_fisik_kinerja = $_POST['kondisi_fisik_kinerja'];
$kondisi_fisik_tombol = $_POST['kondisi_fisik_tombol'];
$kondisi_fisik_luar = $_POST['kondisi_fisik_luar'];
$kondisi_fisik_layar = $_POST['kondisi_fisik_layar'];
$kondisi_fisik = '';
$harga_jual = '';


$kondisi_aksesoris = $_POST['kondisi_aksesoris'];
// foreach ($kondisi_aksesoris as $ka) {
//     $kon[] = $ka;

//     # code...
// }


// ----------------------------------------------------------------------------------------
// print_r($kondisi_aksesoris);
// echo "<br>";

// if ($kondisi_aksesoris[0] == 'charger') {
//     $kon == 'rendah';
// }
// if ($kondisi_aksesoris[0] == 'charger'  && $kondisi_aksesoris[1] == 'box' && $kondisi_aksesoris[2] == 'kartu_garansi') {
//     $kon = "sedang";
// }
// if ($kondisi_aksesoris[0] == 'charger'  && $kondisi_aksesoris[1] == 'box' && $kondisi_aksesoris[2] == 'headset' && $kondisi_aksesoris[3] == 'casing' && $kondisi_aksesoris[4] == 'memory' && $kondisi_aksesoris[5] == 'kartu_garansi') {
//     $kon = "tinggi";
// } elseif ($kondisi_aksesoris[0]) {
//     $kon = 'rendah';
// }x   

// do {

// } while (empty($kon));

if ($harga_beli >= 1000000 && $harga_beli <= 5000000) {
    $harga_beli = 'rendah';
} elseif ($harga_beli >= 4000000 && $harga_beli <= 10000000) {
    $harga_beli = 'sedang';
} elseif ($harga_beli >= 9000000 && $harga_beli <= 21000000) {
    $harga_beli = 'tinggi';
}



if (count($kondisi_aksesoris) > 1) {
    if ($kondisi_aksesoris[0] == 'charger' && $kondisi_aksesoris[1] == 'box' && $kondisi_aksesoris[2] == 'kartu_garansi') {
        $kon = 'sedang';
    } elseif ($kondisi_aksesoris[0] == 'charger' && $kondisi_aksesoris[1] == 'box'  && $kondisi_aksesoris[2] == 'headset'  && $kondisi_aksesoris[3] == 'casing'  && $kondisi_aksesoris[4] == 'memory'  && $kondisi_aksesoris[5] == 'kartu_garansi') {
        $kon = 'bagus';
    }
} elseif ($kondisi_aksesoris[0] == 'charger') {
    $kon = 'kurang';
}

//  if kondisi fisik
if ($kondisi_fisik_kinerja == 'baik' && $kondisi_fisik_tombol == 'powervolumebaik' && $kondisi_fisik_luar = 'lecet1' && $kondisi_fisik_layar == 'mulus') {
    $kondisi_fisik = 'bagus';
} elseif ($kondisi_fisik_kinerja == 'baik' && $kondisi_fisik_tombol == 'powervolumebaik' && $kondisi_fisik_luar = 'lecet2' && $kondisi_fisik_layar == 'mulus') {
    $kondisi_fisik = 'bagus';
} elseif ($kondisi_fisik_kinerja == 'baik' && $kondisi_fisik_tombol == 'powervolumebaik' && $kondisi_fisik_luar = 'lecet1' && $kondisi_fisik_layar == 'goresan') {
    $kondisi_fisik = 'sedang';
} elseif ($kondisi_fisik_kinerja == 'lambat' && $kondisi_fisik_tombol == 'powervolumebaik' && $kondisi_fisik_luar = 'lecet2' && $kondisi_fisik_layar == 'goresan') {
    $kondisi_fisik = 'sedang';
} elseif ($kondisi_fisik_kinerja == 'lambat' && $kondisi_fisik_tombol == 'powervolumerusak' && $kondisi_fisik_luar = 'lecet3' && $kondisi_fisik_layar == 'retak') {
    $kondisi_fisik = 'kurang';
} else {
    echo "data belum tersedia";
}



// if ($kondisi_aksesoris[0] == 'charger' && $kondisi_aksesoris[1] == 'box'  && $kondisi_aksesoris[5] == 'kartu_garansi') {
//     $kon = 'sedang';
// } elseif ($kondisi_aksesoris[0] == 'charger' && $kondisi_aksesoris[1] == 'box'  && $kondisi_aksesoris[2] == 'headset'  && $kondisi_aksesoris[3] == 'casing'  && $kondisi_aksesoris[4] == 'memory'  && $kondisi_aksesoris[5] == 'kartu_garansi') {
//     $kon = 'bagus';
// }
// if ($kondisi_aksesoris[0] == 'charger') {
//     $kon = 'rendah';
// }

$arr = [$harga_beli, $kon, $kondisi_fisik];


// ----------------------------------------------------------------------------------------
// print_r($arr);


if ($arr['0'] === 'tinggi' && $arr['1'] === 'bagus' && $arr['2'] === 'bagus') {
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

// ----------------------------------------------------------------------------------------
// echo "<br>";
// print_r($harga_jual);



// if (in_array('casing', $_POST['kondisi_aksesoris'])) {
//     $kon = 'rendah';
// } elseif (in_array('charger', $_POST['kondisi_aksesoris']) && in_array('box', $_POST['kondisi_aksesoris']) && in_array('kartu_garansi', $_POST['kondisi_aksesoris'])) {
//     $kon = 'sedang';
// } elseif (in_array('kartu_garansi', $_POST['kondisi_aksesoris'])) {
//     $kon = 'tinggi';
// }

// if (array_intersect($_POST['kondisi_aksesoris'], array('charger'))) {
//     $kondisi_aksesoris = 'rendah';
// } elseif (array_intersect($_POST['kondisi_aksesoris'], array('charger', 'box', 'kartu_garansi'))) {
//     $kondisi_aksesoris = 'sedang';
// }

// if (in_array('charger', $_POST['kondisi_aksesoris'])) {
//     $kondisi_aksesoris = 'rendah';
// } elseif (array_intersect($_POST['kondisi_aksesoris'], array('charger', 'box', 'kartu_garansi', 'casing', 'headset'))) {
//     $kondisi_aksesoris = 'tinggi';
// } elseif (array_intersect($_POST['kondisi_aksesoris'], array('charger', 'box', 'kartu_garansi'))) {
//     $kondisi_aksesoris = 'sedang';
// }




// elseif (in_array('box', $_POST['kondisi_aksesoris'])) {
//     $kon = 'sedang';
// }




// echo $kondisi_fisik_kinerja;


// if harga beli





// if kondisi aksesoris


// if ($kon['0'] == 'charger' && empty($kon['1'] == 'box') && empty($kon['2'] == 'headset') && empty($kon['3'] == 'casing') && empty($kon['4'] == 'memory') && empty($kon['5'] == 'kartu_garansi')) {
//     $kon = 'rendah';
// } elseif ($kon['0'] == 'charger' && $kon['1'] == 'box'  && empty($kon['2'] == 'headset') && empty($kon['3'] == 'casing') && empty($kon['4'] == 'memory') && $kon['5'] == 'kartu_garansi') {
//     $kon = 'sedang';
// } elseif ($kon['0'] == 'charger' && $kon['1'] == 'box'  && $kon['2'] == 'headset'  && $kon['3'] == 'casing'  && $kon['4'] == 'memory'  && $kon['5'] == 'kartu_garansi') {
//     $kon = 'bagus';
// }



// if ($kondisi_aksesoris['0'] === 'charger'  && $kondisi_aksesoris['1'] === 'box' && $kondisi_aksesoris['2'] === 'headset' && $kondisi_aksesoris['3'] === 'casing' && $kondisi_aksesoris['4'] === 'memory' && $kondisi_aksesoris['5'] === 'kartu_garansi') {
//     $kondisi_aksesoris = "tinggi";
// } elseif ($kondisi_aksesoris['0'] === 'charger'  && $kondisi_aksesoris['1'] === 'box') {
//     $kondisi_aksesoris = "sedang";
// } elseif ($kondisi_aksesoris['0'] === 'charger') {
//     $kondisi_aksesoris = 'rendah';
// }

// $arr = [$harga_beli, $kon];
// $arr = [$kon];
// echo $ka;
// print_r($arr);






// $kondisi_fisik = $_POST['kondisi_fisik'];
// $kondisi_aksesoris = $_POST['kondisi_aksesoris'];




// $arr = [$harga_beli, $kondisi_fisik, $kondisi_aksesoris];
// if ($harga_beli >= '1000000' && $harga_beli <= '5000000') {
//     $harga_beli == 'rendah';
// }

// if harga beli

// // if kondisi fisik
// if ($kondisi_fisik >= 1 && $kondisi_fisik <= 4) {
//     $kondisi_fisik = 'kurang';
// } elseif ($kondisi_fisik >= 3 && $kondisi_fisik <= 7) {
//     $kondisi_fisik = 'sedang';
// } elseif ($kondisi_fisik >= 6 && $kondisi_fisik <= 10) {
//     $kondisi_fisik = 'bagus';
// }

// //  if kondisi aksesoris
// if ($kondisi_aksesoris >= 1 && $kondisi_aksesoris <= 4) {
//     $kondisi_aksesoris = 'kurang';
// } elseif ($kondisi_aksesoris >= 3 && $kondisi_aksesoris <= 7) {
//     $kondisi_aksesoris = 'sedang';
// } elseif ($kondisi_aksesoris >= 6 && $kondisi_aksesoris <= 10) {
//     $kondisi_aksesoris = 'bagus';
// }




// } elseif ($arr['0'] == 4000000 && $arr['0'] == 10000000) {
//     $arr['0'] == 'sedang';
// } elseif ($arr['0'] == 9000000 && $arr['0'] == 21000000) {
//     $arr['0'] == 'tinggi';
// }
// print_r($arr);

// $hasil = '';




// print_r($kondisi_fisik_kinerja);

// kondisi harga beli

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tubes Logika Samar</title>
</head>

<?php
// session_start();
// $harga_jual = $_SESSION['harga_jual'];
// $_SESSION[''] = $harga_jual;
// require_once('proses.php');

?>

<body>

    <div class="container">
        <div class="text-center mt-5" style="margin-bottom: 100px;">
            <h1>Selamat datang di Sistem Pendukung Keputusan Harga Jual Handphone Bekas</h1>
        </div>
        <!-- <h5 class="">
            Silakan masukkan kondisi HP anda berdasarkan petunjuk berikut
        </h5>
        <div class="row mb-5">
            <div class="col-4">
                <div class="card p-3" style="background-color: #C3FDB8;">
                    <h5 class="mb-3">Harga Beli</h5>
                    <p>Tinggi : Rp. 9.000.000 - 21.000.000</p>
                    <p>Sedang : Rp. 4.000.000 - 10.000.000</p>
                    <p>Rendah : Rp. 1.000.000 - 5.000.000</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-3" style="background-color: lightblue;">
                    <h5 class="mb-3">Kondisi Fisik</h5>
                    <p>Bagus : Lecet maksimal 45% <br>
                        Tombol power dan volume mengalami kerusakan namun masih bisa diperbaiki <br>
                        Terdapat retak pada layar dan fungsi layar tidak maksimal
                    </p>
                    <p>Sedang : Hp lelet
                        Lecet maksimal 25% <br>
                        Tombol power atau volume berfungsi dengan baik <br>
                        Terdapat goresan pada layar tapi masih berfungsi dengan baik
                    </p>
                    <p>Kurang : Lecet maksimal 45% <br>
                        Tombol power dan volume mengalami kerusakan namun masih bisa diperbaiki <br>
                        Terdapat retak pada layar dan fungsi layar tidak maksimal
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-3" style="background-color: #FFFFC2;">
                    <h5 class="mb-3">Kondisi Aksesoris</h5>
                    <p>Bagus : Charger, box, headset, casing, memory card, kartu garansi (6)</p>
                    <p>Sedang : Box, charger, kartu garansi</p>
                    <p>Kurang : Charger</p>
                </div> -->
        <!-- </div>
        </div> -->



        <div class="alert alert-success" role="alert">
            <h5 class="text-center"><?php echo $harga_jual; ?></h5>
        </div>

        <div class="row">
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <p class=""><span class="fw-bold">Sangat rendah <br> </span> Rp. 400.000 - Rp. 1.100.000</p>
                </div>

            </div>
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <p class=""><span class="fw-bold">Rendah <br></span> Rp. 1.100.000 - Rp. 1.900.000</p>
                </div>

            </div>
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <p class=""><span class="fw-bold">Sedang <br></span> Rp. 1.800.000 - Rp. 3.500.000</p>
                </div>

            </div>
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <p class=""><span class="fw-bold">Tinggi <br></span> Rp. 3.400.000 - Rp. 4.800.000</p>
                </div>

            </div>
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <p class=""><span class="fw-bold">Sangat tinggi <br></span> Rp. 4.700.000 - Rp. 7.000.000</p>
                </div>

            </div>

        </div>

        <form method="post" action="proses.php">


            <!-- baru -->
            <div class="form-group mb-5 fw-bold">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" class="form-control" id="harga_beli" aria-describedby="emailHelp" name="harga_beli" min="1000000" max="21000000" required>
                <small id="hargabelihint" class="form-text text-muted">Harap masukan harga beli baru saat ini <br> </small>
                <small id="hargabelihint" class="form-text text-muted">Tulis harga barang tanpa mata uang dan tanpa tanda baca. Contoh: 500000</small>
            </div>
            <!-- 
            <div class="form-group mb-3">
                <label for="kondisi_fisik">Kondisi Fisik</label>
                <input type="number" class="form-control" id="kondisi_fisik" aria-describedby="emailHelp" name="kondisi_fisik" min="1" max="10" required>
                <small id="hargabelihint" class="form-text text-muted">Tulis harga barang tanpa mata uang dan tanpa tanda baca. Contoh: 500000</small>
            </div> -->

            <!-- kondisi fisik -->

            <label for="kondisi_fisik" class="fw-bold mb-3">Kondisi Fisik</label>

            <div class="row d-flex justify-content-center">
                <div class="col">
                    <fieldset>
                        <p style="margin-bottom: 4px;">Kinerja HP</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kondisi_fisik_kinerja" id="kondisi_fisik_kinerja1" value="baik" checked>
                            <label class="form-check-label" for="kondisi_fisik_kinerja1">
                                Baik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kondisi_fisik_kinerja" id="kondisi_fisik_kinerja2" value="lambat">
                            <label class="form-check-label" for="kondisi_fisik_kinerja2">
                                Lambat
                            </label>
                        </div>
                    </fieldset>
                </div>

                <div class="col">
                    <fieldset>
                        <p style="margin-bottom: 4px;">Kondisi Tombol</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kondisi_fisik_tombol" id="kondisi_fisik_tombol1" value="powervolumebaik" checked>
                            <label class="form-check-label" for="kondisi_fisik_tombol1">
                                Tombol power dan volume berfungsi dengan baik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kondisi_fisik_tombol" id="kondisi_fisik_tombol2" value="powervolumebaik1">
                            <label class="form-check-label" for="kondisi_fisik_tombol2">
                                Tombol power atau volume berfungsi dengan baik
                            </label>
                        </div>
                        <div class="form-check mb-5">
                            <input class="form-check-input" type="radio" name="kondisi_fisik_tombol" id="kondisi_fisik_tombol3" value="powervolumerusak">
                            <label class="form-check-label" for="kondisi-fisik3">
                                Tombol power dan volume mengalami kerusakan namun masih bisa diperbaiki
                            </label>
                        </div>
                    </fieldset>
                </div>

                <div class="col">
                    <p style="margin-bottom: 4px;">Kondisi Bagian Luar HP</p>
                    <fieldset>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kondisi_fisik_luar" id="kondisi_fisik_luar1" value="lecet1" checked>
                            <label class="form-check-label" for="kondisi_fisik_luar1">
                                Lecet 0-10%
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kondisi_fisik_luar" id="kondisi_fisik_luar2" value="lecet2">
                            <label class="form-check-label" for="kondisi_fisik_luar2">
                                Lecet 11-25%
                            </label>
                        </div>
                        <div class="form-check mb-5">
                            <input class="form-check-input" type="radio" name="kondisi_fisik_luar" id="kondisi_fisik_luar3" value="lecet3">
                            <label class="form-check-label" for="kondisi_fisik_luar3">
                                Lecet 26-45%
                            </label>
                        </div>
                    </fieldset>
                </div>

                <div class="col">
                    <p style="margin-bottom: 4px;">Kondisi Layar</p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kondisi_fisik_layar" id="kondisi_fisik_layar1" value="mulus" checked>
                        <label class="form-check-label" for="kondisi_fisik_layar1">
                            Layar mulus dan berfungsi dengan baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kondisi_fisik_layar" id="kondisi_fisik_layar2" value="goresan">
                        <label class="form-check-label" for="kondisi_fisik_layar2">
                            Terdapat goresan pada layar tapi masih berfungsi dengan baik
                        </label>
                    </div>
                    <div class="form-check mb-5">
                        <input class="form-check-input" type="radio" name="kondisi_fisik_layar" id="kondisi_fisik_layar3" value="retak">
                        <label class="form-check-label" for="kondisi_fisik_layar3">
                            Terdapat retak pada layar dan fungsi layar tidak maksimal
                        </label>
                    </div>

                </div>

            </div>

            <label for="kondisi_fisik" class="fw-bold mb-3">Kondisi Aksesoris</label>

            <div class="row d-flex justify-content-center">
                <div class="row">
                    <div class="col">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kondisi_aksesoris[]" id="kondisi_aksesoris1" value="charger" checked>
                            <label class="form-check-label" for="kondisi_aksesoris1">
                                Charger
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kondisi_aksesoris[]" id="kondisi_aksesoris2" value="box">
                            <label class="form-check-label" for="kondisi_aksesoris2">
                                Box
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kondisi_aksesoris[]" id="kondisi_aksesoris2" value="headset">
                            <label class="form-check-label" for="kondisi_aksesoris2">
                                Headset
                            </label>
                        </div>
                    </div>


                    <div class="col">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kondisi_aksesoris[]" id="kondisi_aksesoris2" value="casing">
                            <label class="form-check-label" for="kondisi_aksesoris2">
                                Casing
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kondisi_aksesoris[]" id="kondisi_aksesoris2" value="memory">
                            <label class="form-check-label" for="kondisi_aksesoris2">
                                Memory Card
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kondisi_aksesoris[]" id="kondisi_aksesoris2" value="kartu_garansi">
                            <label class="form-check-label" for="kondisi_aksesoris2">
                                Kartu Garansi
                            </label>
                        </div>
                    </div>



                </div>



            </div>

            <button type="submit" class="btn btn-primary mt-5 mb-5">Submit</button>


            <!-- <div class="form-group mb-5 mt-3 fw-bold">
                <label for="kondisi_aksesoris">Kondisi Aksesoris</label>
                <input type="number" class="form-control" id="kondisi_aksesoris" aria-describedby="emailHelp" name="kondisi_aksesoris" min="1" max="10" required>
                <small id="hargabelihint" class="form-text text-muted">Tulis harga barang tanpa mata uang dan tanpa tanda baca. Contoh: 500000</small>
            </div> -->











            <!-- lama -->

            <!-- <div class="mb-3">
                <label for="harga_beli" class="form-label">Harga Beli</label>
                <select class="form-select" aria-label="Default select example" name="harga_beli">
                    <option value="tinggi">Tinggi</option>
                    <option value="sedang">Sedang</option>
                    <option value="rendah">Rendah</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kondisi_fisik" class="form-label">Kondisi Fisik</label>
                <select class="form-select" aria-label="Default select example" name="kondisi_fisik">
                    <option value="bagus">Bagus</option>
                    <option value="sedang">Sedang</option>
                    <option value="kurang">Kurang</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kondisi_aksesoris" class="form-label">Kondisi Aksesoris</label>
                <select class="form-select" aria-label="Default select example" name="kondisi_aksesoris">
                    <option value="bagus">Bagus</option>
                    <option value="sedang">Sedang</option>
                    <option value="kurang">Kurang</option>
                </select>
            </div> -->
        </form>


    </div>

    <div class="text-center">
        <!--  -->
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>