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
                </div>
            </div>
        </div>

        <form method="post" action="hasil.php">


            <!-- baru -->
            <div class="form-group mb-3">
                <label for="harga_beli">Harga Beli</label>
                <input type="number" class="form-control" id="harga_beli" aria-describedby="emailHelp" name="harga_beli" min="1000000" max="21000000" required>
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




            <button type="submit" class="btn btn-primary mb-5">Submit</button>







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