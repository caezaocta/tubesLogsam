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
// require_once('proses.php');session_start();

$harga_beli = $_POST['harga_beli'];
$kondisi_fisik = $_POST['kondisi_fisik'];
$kondisi_aksesoris = $_POST['kondisi_aksesoris'];




// $arr = [$harga_beli, $kondisi_fisik, $kondisi_aksesoris];
// if ($harga_beli >= '1000000' && $harga_beli <= '5000000') {
//     $harga_beli == 'rendah';
// }

// if harga beli
if ($harga_beli >= 1000000 && $harga_beli <= 5000000) {
    $harga_beli = 'rendah';
} elseif ($harga_beli >= 4000000 && $harga_beli <= 10000000) {
    $harga_beli = 'sedang';
} elseif ($harga_beli >= 9000000 && $harga_beli <= 21000000) {
    $harga_beli = 'tinggi';
}

// if kondisi fisik
if ($kondisi_fisik >= 1 && $kondisi_fisik <= 4) {
    $kondisi_fisik = 'kurang';
} elseif ($kondisi_fisik >= 3 && $kondisi_fisik <= 7) {
    $kondisi_fisik = 'sedang';
} elseif ($kondisi_fisik >= 6 && $kondisi_fisik <= 10) {
    $kondisi_fisik = 'bagus';
}

//  if kondisi aksesoris
if ($kondisi_aksesoris >= 1 && $kondisi_aksesoris <= 4) {
    $kondisi_aksesoris = 'kurang';
} elseif ($kondisi_aksesoris >= 3 && $kondisi_aksesoris <= 7) {
    $kondisi_aksesoris = 'sedang';
} elseif ($kondisi_aksesoris >= 6 && $kondisi_aksesoris <= 10) {
    $kondisi_aksesoris = 'bagus';
}


$arr = [$harga_beli, $kondisi_fisik, $kondisi_aksesoris];

// } elseif ($arr['0'] == 4000000 && $arr['0'] == 10000000) {
//     $arr['0'] == 'sedang';
// } elseif ($arr['0'] == 9000000 && $arr['0'] == 21000000) {
//     $arr['0'] == 'tinggi';
// }
// print_r($arr);

$hasil = '';

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


?>

<body>



    <div class="container ">
        <div class="text-center mt-5" style="margin-bottom: 100px;">
            <h1>Selamat datang di Sistem Pendukung Keputusan Harga Jual Handphone Bekas</h1>
        </div>

        <div class="alert alert-success text-center">
            <h3><?php echo $harga_jual; ?></h3>
        </div>
        <!-- 
        <h5 class="">
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
                    <p>Bagus : Rp. 9.000.000 - 21.000.000</p>
                    <p>Sedang : Rp. 4.000.000 - 10.000.000</p>
                    <p>Kurang : Rp. 1.000.000 - 5.000.000</p>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-3" style="background-color: #FFFFC2;">
                    <h5 class="mb-3">Kondisi Aksesoris</h5>
                    <p>Bagus : Rp. 9.000.000 - 21.000.000</p>
                    <p>Sedang : Rp. 4.000.000 - 10.000.000</p>
                    <p>Kurang : Rp. 1.000.000 - 5.000.000</p>
                </div>
            </div>
        </div> -->

        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="card p-3 mb-5" style="background-color: #FFFFC2;">
                    <h5 class="mb-3">Harga Jual</h5>

                    <p>Sangat Rendah : <span class="fw-bold"> 4.000.000 – 1.100.000 </span></p>
                    <p>Rendah : <span class="fw-bold"> 1.100.000 – 1.900.000</span></p>
                    <p>Sedang : <span class="fw-bold">1.800.000 – 3.500.000</span></p>
                    <p>Tinggi : <span class="fw-bold">3.400.000 – 4.800.000</span></p>
                    <p>Sangat Tinggi : <span class="fw-bold">4.700.000 – 7.000.000</span></p>

                </div>
            </div>
        </div>

        <form method="post" action="hasil.php">
            <div class="form-group mb-3">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" class="form-control" id="harga_beli" aria-describedby="emailHelp" name="harga_beli" min="100000" max="21000000" required>
                <small id="hargabelihint" class="form-text text-muted">Tulis harga barang tanpa mata uang dan tanpa tanda baca. Contoh: 500000</small>
            </div>

            <div class="form-group mb-3">
                <label for="kondisi_fisik">Kondisi Fisik</label>
                <input type="number" class="form-control" id="kondisi_fisik" aria-describedby="emailHelp" name="kondisi_fisik" min="1" max="10" required>
                <small id="hargabelihint" class="form-text text-muted">Tulis harga barang tanpa mata uang dan tanpa tanda baca. Contoh: 500000</small>
            </div>

            <div class="form-group mb-3">
                <label for="kondisi_aksesoris">Kondisi Aksesoris</label>
                <input type="number" class="form-control" id="kondisi_aksesoris" aria-describedby="emailHelp" name="kondisi_aksesoris" min="1" max="10" required>
                <small id="hargabelihint" class="form-text text-muted">Tulis harga barang tanpa mata uang dan tanpa tanda baca. Contoh: 500000</small>
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
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