<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Diskon</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="background-color: #edf2f4;">
    
    <div class="container mt-4">
        <div class="row m-2">
            <div class="col-md-12 bg-danger p-4" style="border-radius: 5px; color: white;">
                <h1>%</h1>
                <p>Penghitung Harga Diskon</p>
            </div>
            <div class="col-md-12 bg-white mt-4 p-4" style="border-radius: 5px;">
                <!-- Hitung Diskon -->
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Diskon</label>
                        <input type="number" class="form-control" name="diskon" id="diskon" placeholder="Diskon" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger" name="hitung">Hitung Diskon</button>
                    </div>
                </form>

                <!-- Hasil -->
                <div class="alert alert-danger" role="alert">
                    <p>Harga diskon</p>
                <?php
                    if (isset($_POST['hitung'])) {
                        $harga = $_POST['harga'];
                        $diskon = $_POST['diskon'];
                        $hasil = $harga - ($harga * $diskon / 100);
                        $hemat = $harga - $hasil;
                        $hasil_rupiah = "Rp. " . number_format($hasil, 0, ",", ".");
                        $hemat_rupiah = "Rp. " . number_format($hemat, 0, ",", ".");
                        echo "<h4>$hasil_rupiah</h4>";
                        echo "Anda hemat <strong>$hemat_rupiah</strong>";
                    }
                ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>