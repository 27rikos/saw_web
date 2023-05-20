<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/phone.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>alternatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    nav {
        background-color: #454545 !important;
    }

    img {
        width: 30px;
        margin-right: 5px;
    }

    h4 {
        text-align: center;
        margin-top: 15%;
        text-shadow: 1px 1px white;

    }

    @media screen and (max-width:500px) {
        h4 {
            margin-top: 50%;
        }

    }

    footer {
        width: 100%;
        bottom: 0;
        color: white;
        background-color: #454545 !important;

    }

    @media screen and (max-width:500px) {
        .scroll {
            overflow: scroll;
        }
    }

    html {
        scroll-behavior: smooth;
    }

    .convert {
        padding: 3px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg  fw-bold navbar-dark">
        <div class="container">
            <a class="navbar-brand " href="#"> <img src="../img/phone.png" alt="" srcset="">WEBSITE SPK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="user.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="alternatif.php">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="normalisasi.php">Normalisasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="bobot.php">Bobot</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="data container">
        <h1 class="text-center mb-3">DATA ALTERNATIF</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
            Tambah data
        </button>
        <div class="scroll">
            <table class="table table-dark mt-3">
                <thead>

                    <tr>
                        <th>ALTERNATIF</th>
                        <th>MEREK</th>
                        <th>HARGA</th>
                        <th>RAM</th>
                        <th>ROM</th>
                        <th>LAYAR</th>
                        <th>KAMERA</th>
                        <th>AKSI</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    include('cnnt.php');
                    $sql = mysqli_query($conn, "select * from alternatif");
                    while ($data = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?= $data['alternatif'] ?>
                            </td>
                            <td>
                                <?= $data['merk'] ?>
                            </td>
                            <td>
                                <?= $data['harga'] ?>
                            </td>
                            <td>
                                <?= $data['ram'] ?>
                            </td>
                            <td>
                                <?= $data['rom'] ?>
                            </td>
                            <td>
                                <?= $data['layar'] ?>
                            </td>
                            <td>
                                <?= $data['kamera'] ?>
                            </td>
                            <td>
                                <a href="hapus_alt.php?id=<?= $data['id_alternatif'] ?>" class="btn btn-danger">Hapus</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#edit<?= $data['id_alternatif'] ?>">
                                    Edit
                                </button>

                                <!-- Modal edit -->
                                <div class="modal fade" id="edit<?= $data['id_alternatif'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">EDIT DATA ALTERNATIF
                                                </h1>
                                            </div>
                                            <form action="" method="post">
                                                <div class="modal-body">
                                                    <div class="mb-3  row">
                                                        <div class="col">
                                                            <input type="text" name="id" class=" form-control"
                                                                placeholder="ID" value="<?= $data['id_alternatif'] ?>">
                                                        </div>

                                                    </div>
                                                    <div class="mb-3  row">
                                                        <div class="col">
                                                            <input type="text" name="ealternatif" class=" form-control"
                                                                placeholder="Alternatif" value="<?= $data['alternatif'] ?>">
                                                        </div>

                                                    </div>
                                                    <div class="mb-3  row">
                                                        <div class="col">
                                                            <input type="text" name="emerk" class="form-control "
                                                                placeholder="Merk" value="<?= $data['merk'] ?>">
                                                        </div>

                                                    </div>
                                                    <div class="mb-3  row">
                                                        <div class="col">
                                                            <input type="text" name="eharga" class="form-control "
                                                                placeholder="Harga" value="<?= $data['harga'] ?>">
                                                        </div>

                                                    </div>
                                                    <div class="mb-3  row">
                                                        <div class="col">
                                                            <input type="text" name="eram" class=" form-control"
                                                                placeholder="RAM" value="<?= $data['ram'] ?>">
                                                        </div>

                                                    </div>
                                                    <div class="mb-3  row">
                                                        <div class="col">
                                                            <input type="text" name="erom" class="form-control "
                                                                placeholder="ROM" value="<?= $data['rom'] ?>">
                                                        </div>

                                                    </div>
                                                    <div class="mb-3  row">
                                                        <div class="col">
                                                            <input type="text" name="elayar" class="form-control "
                                                                placeholder="Layar" value="<?= $data['layar'] ?>">
                                                        </div>

                                                    </div>
                                                    <div class="mb-3  row ">
                                                        <div class="col">
                                                            <input type="text" name="ekamera" class="form-control "
                                                                placeholder="Kamera" value="<?= $data['kamera'] ?>">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--   konversi -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#konversi<?= $data['id_alternatif'] ?>">
                                    Konversi
                                </button>

                                <!-- Modal konversi -->
                                <div class="modal fade" id="konversi<?= $data['id_alternatif'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">KONVERSI DATA</h1>
                                            </div>
                                            <form action="" method="post">
                                                <div class="modal-body">
                                                    <div class="convert row">
                                                        <div class="col">
                                                            <input type="text" name="merk" class="form-control"
                                                                value="<?= $data['merk'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="convert row">
                                                        <div class="col">
                                                            <input type="text" class="form-control"
                                                                value="<?= $data['harga'] ?>">
                                                        </div>
                                                        <div class="col">
                                                            <select name="harga" class="form-control">
                                                                <option value="">Harga</option>
                                                                <option value="1">1,000,000-1,999,000
                                                                </option>
                                                                <option value="2">2,000,000-2,999,000
                                                                </option>
                                                                <option value="3">3,000,000-3,999,000
                                                                </option>
                                                                <option value="4">4,000,000-4,999,000
                                                                </option>
                                                                <option value="5">5,000,000-5,999,000
                                                                </option>
                                                                <option value="6">6,000,000-7,999,000
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="convert row">
                                                        <div class="col">
                                                            <input type="text" class="form-control"
                                                                value="<?= $data['ram'] ?>">
                                                        </div>
                                                        <div class="col">
                                                            <select name="ram" class="form-control">
                                                                <option value="">RAM</option>
                                                                <option value="1">1-2
                                                                </option>
                                                                <option value="2">3-4
                                                                </option>
                                                                <option value="3">6-8
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="convert row">
                                                        <div class="col">
                                                            <input type="text" class="form-control"
                                                                value="<?= $data['rom'] ?>">
                                                        </div>
                                                        <div class="col">
                                                            <select name="rom" class="form-control">
                                                                <option value="">ROM</option>
                                                                <option value="1">16
                                                                </option>
                                                                <option value="2">32
                                                                </option>
                                                                <option value="3">64
                                                                </option>
                                                                <option value="4">128
                                                                </option>
                                                                <option value="5">512
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="convert row">
                                                        <div class="col">
                                                            <input type="text" class="form-control"
                                                                value="<?= $data['layar'] ?>">
                                                        </div>
                                                        <div class="col">
                                                            <select name="layar" class="form-control">
                                                                <option value="">Layar</option>
                                                                <option value="1">5-5.9
                                                                </option>
                                                                <option value="2">6-6.9
                                                                </option>
                                                                <option value="3">7
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="convert row">
                                                        <div class="col">
                                                            <input type="text" class="form-control"
                                                                value="<?= $data['kamera'] ?>">
                                                        </div>
                                                        <div class="col">
                                                            <select name="kamera" class="form-control">
                                                                <option value="">Kamera</option>
                                                                <option value="1">8-15
                                                                </option>
                                                                <option value="2">16-30
                                                                </option>
                                                                <option value="3">31-50
                                                                </option>
                                                                <option value="4">51-100
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        name="konversi">Konversi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <h1 class="text-center mt-4 mb-3">KONVERSI DATA ALTERNATIF</h1>
        <div class="scroll">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>MERK</th>
                        <th>HARGA</th>
                        <th>RAM</th>
                        <th>ROM</th>
                        <th>LAYAR</th>
                        <th>KAMERA</th>
                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("cnnt.php");
                    $sql = mysqli_query($conn, "select * from konversi");
                    while ($data = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?= $data['merk'] ?>
                            </td>
                            <td>
                                <?= $data['c1'] ?>
                            </td>
                            <td>
                                <?= $data['c2'] ?>
                            </td>
                            <td>
                                <?= $data['c3'] ?>
                            </td>
                            <td>
                                <?= $data['c4'] ?>
                            </td>
                            <td>
                                <?= $data['c5'] ?>
                            </td>
                            <td><a href="hapus_cnvt.php?id=<?= $data['kode'] ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <!-- Modal tambah data -->
        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5  text-light" id="exampleModalLabel">Tambah Data Alternatif
                        </h1>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="mb-3  row">
                                <div class="col">
                                    <input type="text" name="alternatif" class=" form-control" placeholder="Alternatif">
                                </div>

                            </div>
                            <div class="mb-3  row">
                                <div class="col">
                                    <input type="text" name="merk" class="form-control " placeholder="Merk">
                                </div>

                            </div>
                            <div class="mb-3  row">
                                <div class="col">
                                    <input type="text" name="harga" class="form-control " placeholder="Harga">
                                </div>

                            </div>
                            <div class="mb-3  row">
                                <div class="col">
                                    <input type="text" name="ram" class=" form-control" placeholder="RAM">
                                </div>

                            </div>
                            <div class="mb-3  row">
                                <div class="col">
                                    <input type="text" name="rom" class="form-control " placeholder="ROM">
                                </div>

                            </div>
                            <div class="mb-3  row">
                                <div class="col">
                                    <input type="text" name="layar" class="form-control " placeholder="Layar">
                                </div>

                            </div>
                            <div class="mb-3  row ">
                                <div class="col">
                                    <input type="text" name="kamera" class="form-control " placeholder="Kamera">
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("cnnt.php");
    if (isset($_POST['tambah'])) {
        $alt = $_POST['alternatif'];
        $merk = $_POST['merk'];
        $harga = $_POST['harga'];
        $ram = $_POST['ram'];
        $rom = $_POST['rom'];
        $layar = $_POST['layar'];
        $kamera = $_POST['kamera'];

        $sql = mysqli_query($conn, "insert into alternatif(alternatif, merk, harga, ram, rom, layar, kamera)values
        ('$alt','$merk','$harga','$ram','$rom','$layar','$kamera')");
        if ($sql == true) {
            echo " <meta http-equiv='refresh' content='0.1' url=?page=alternatif>";
        }

    }
    ?>

    <?php
    if (isset($_POST['edit'])) {
        include('cnnt.php');
        $id = $_POST['id'];
        $alt = $_POST['ealternatif'];
        $merk = $_POST['emerk'];
        $harga = $_POST['eharga'];
        $ram = $_POST['eram'];
        $rom = $_POST['erom'];
        $layar = $_POST['elayar'];
        $kamera = $_POST['ekamera'];

        $sql = mysqli_query($conn, "update alternatif set alternatif='$alt',merk='$merk',harga='$harga',ram='$ram',rom='$rom',layar='$layar',kamera='$kamera' where id_alternatif='$id'");
        if ($sql == true) {
            echo " <meta http-equiv='refresh' content='0.1' url=?page=alternatif>";
        }
    }
    ?>
    <?php
    include('cnnt.php');
    if (isset($_POST['konversi'])) {
        $merk = $_POST['merk'];
        $harga = $_POST['harga'];
        $ram = $_POST['ram'];
        $rom = $_POST['rom'];
        $layar = $_POST['layar'];
        $kamera = $_POST['kamera'];

        $sql = mysqli_query($conn, "insert into konversi(merk,c1,c2,c3,c4,c5)values('$merk','$harga','$ram','$rom','$layar','$kamera')");
        if ($sql == true) {
            echo " <meta http-equiv='refresh' content='0.1' url=?page=alternatif>";
        }
    }
    ?>
    <footer>
        <div class="container text-center">
            &copy;2023
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>