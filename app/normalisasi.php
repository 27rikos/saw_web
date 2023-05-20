<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/phone.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penilaian</title>
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
        position: absolute;
        color: white;
        background-color: #454545 !important;

    }

    .data {
        margin-top: 5%;
    }

    @media screen and (max-width:500px) {
        .scroll {
            overflow: scroll;
        }
    }

    html {
        scroll-behavior: smooth;
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
    <div class="container">
        <h1 class="text-center mt-3 mb-3">NORMALISASI DAN PE-RANKINGAN</h1>
        <table class="table table-dark">
            <thead>
                <th>NAMA</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>HASIL</th>
            </thead>
            <tbody>
                <?php
                include("cnnt.php");
                $sql = mysqli_query($conn, "select min(c1) as C1, max(c2) as C2, max(c3) as C3, max(c4) as C4, max(c5) as C5 from konversi");
                $hasil = mysqli_fetch_array($sql);
                $c1 = $hasil['C1'];
                $c2 = $hasil['C2'];
                $c3 = $hasil['C3'];
                $c4 = $hasil['C4'];
                $c5 = $hasil['C5'];

                $bobot = mysqli_query($conn, "select * from bobot");
                $w = mysqli_fetch_array($bobot);
                $w1 = $w['w1'];
                $w2 = $w['w2'];
                $w3 = $w['w3'];
                $w4 = $w['w4'];
                $w5 = $w['w5'];

                $normalisasi = mysqli_query($conn, "select * from konversi");
                while ($row = mysqli_fetch_array($normalisasi)) {
                    ?>
                    <tr>
                        <td>
                            <?= $row['merk'] ?>
                        </td>
                        <td>
                            <?= $normalisasi1 = round(($c1 / $row['c1']), 2) ?>
                        </td>
                        <td>
                            <?= $normalisasi2 = round(($c2 / $row['c2']), 2) ?>
                        </td>
                        <td>
                            <?= $normalisasi3 = round(($c3 / $row['c3']), 2) ?>
                        </td>
                        <td>
                            <?= $normalisasi4 = round(($c4 / $row['c4']), 2) ?>
                        </td>
                        <td>
                            <?= $normalisasi5 = round(($c5 / $row['c5']), 2) ?>
                        </td>
                        <td>
                            <?= round((($normalisasi1 * $w1) + ($normalisasi2 * $w2) + ($normalisasi3 * $w3) + ($normalisasi4 * $w4) + ($normalisasi5 * $w5)), 2) ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <div class="container text-center">
            &copy;2023
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>