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
session_start();
$harga_jual = $_SESSION['harga_jual'];
// $_SESSION[''] = $harga_jual;
// require_once('proses.php');

?>

<body>
    <div class="text-center mt-5">
        <h1>Selamat datang di Sistem Pendukung Keputusan Harga Jual Handphone Bekas</h1>
    </div>


    <div class="container mt-5">
        <h3 class="mb-5">Silakan masukan detail HP</h3>
        <form method="post" action="proses.php">
            <div class="mb-3">
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
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="text-center">
        <h1><?php echo $harga_jual; ?></h1>
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