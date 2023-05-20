<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/phone.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
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
                        <a class="nav-link " aria-current="page" href="bobot.php.php">Bobot</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container ">
        <h1 class="text-center mt-2 mb-3">BOBOT</h1>
        <div class="scroll">
            <table class="table table-dark">
                <?php
                include("cnnt.php");
                $sql = mysqli_query($conn, "select * from bobot");
                while ($data = $sql->fetch_array()) {
                    ?>
                    <tr>
                        <td>W1</td>
                        <td name="w1">
                            <?= $data['w1'] ?>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>W2</td>
                        <td class="w2">
                            <?= $data['w2'] ?>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>W3</td>
                        <td class="w3">
                            <?= $data['w3'] ?>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>W4</td>
                        <td class="w4">
                            <?= $data['w4'] ?>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>W5</td>
                        <td class="w5">
                            <?= $data['w5'] ?>
                        </td>
                    </tr>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                        data-bs-target="#bobot<?= $data['id_bobot'] ?>">
                        Edit Bobot
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="bobot<?= $data['id_bobot'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Bobot</h1>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3  row">
                                            <div class="col">
                                                <input type="text" name="id" class=" form-control" placeholder="ID"
                                                    value="<?= $data['id_bobot'] ?>">
                                            </div>

                                        </div>
                                        <div class="mb-3  row">
                                            <div class="col">
                                                <input type="text" name="w1" class=" form-control" placeholder="W1"
                                                    value="<?= $data['w1'] ?>">
                                            </div>

                                        </div>
                                        <div class="mb-3  row">
                                            <div class="col">
                                                <input type="text" name="w2" class=" form-control" placeholder="W2"
                                                    value="<?= $data['w2'] ?>">
                                            </div>

                                        </div>
                                        <div class="mb-3  row">
                                            <div class="col">
                                                <input type="text" name="w3" class=" form-control" placeholder="W3"
                                                    value="<?= $data['w3'] ?>">
                                            </div>

                                        </div>
                                        <div class="mb-3  row">
                                            <div class="col">
                                                <input type="text" name="w4" class=" form-control" placeholder="W4"
                                                    value="<?= $data['w4'] ?>">
                                            </div>

                                        </div>
                                        <div class="mb-3  row">
                                            <div class="col">
                                                <input type="text" name="w5" class=" form-control" placeholder="W5"
                                                    value="<?= $data['w5'] ?>">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </table>

        </div>
    </div>
    </div>
    <?php
    include('cnnt.php');
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $w1 = $_POST['w1'];
        $w2 = $_POST['w2'];
        $w3 = $_POST['w3'];
        $w4 = $_POST['w4'];
        $w5 = $_POST['w5'];

        $sql = mysqli_query($conn, "update bobot set w1='$w1', w2='$w2', w3='$w3', w4='$w4', w5='$w5' where id_bobot='$id'");

        if ($sql == true) {
            echo " <meta http-equiv='refresh' content='0.1' url=?page=bobot>";
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

</html>